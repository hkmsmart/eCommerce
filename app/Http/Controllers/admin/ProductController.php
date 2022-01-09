<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function get_add_product()
    {
        $categories   = Category::all();
        $tags         = Tag::all();

        return view("admin.add_product")->with('categories', $categories)->with('tags', $tags);
        /*
            $categories   = Category::all();
            $category_arr = array();
            foreach ($categories as $category) {
                $category_arr[$category->id] = $category->name;
            }
            return view("admin.add_category")->with('categories', $categories)->with('category_arr', $category_arr);
        */
    }

    public function post_add_product(Request $request)
    {
        $image_required = $request->validate([
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $main_image_url = ProductController::main_image_upload($request);
        if($main_image_url == false){
            return  redirect('/admin/urunekle')->with('message', 'Fotoğraf yüklenirken hata oldu !')->with('statu', 'danger');
        }

        $author = Auth::user()->email;
        $add_tax_price      = $request->reguler_price + ($request->reguler_price* ($request->tax_rate/100));
        $add_discount_price = ((100 - $request->discount_range) / 100) * $add_tax_price;

        if($request->discount_range < 0){
            $add_discount_price = null;
        }

       $add_product_control =  DB::table('products')->insert(
            [   'name' => $request->name,
                'serial_no' =>$request->serial_no,
                'keywords' =>$request->keywords,
                'short_description' =>$request->short_description,
                'description' =>$request->description,
                'product_type' =>$request->product_type,
                'category_id' =>$request->category_id,
                'tag_id' =>$request->tag_id,
                'author' => $author,
                'quantity' =>$request->quantity,
                'reguler_price' =>$request->reguler_price,
                'tax_rate' =>$request->tax_rate,
                'kdv_reguler_price' => $add_tax_price,
                'discount_range' =>$request->discount_range,
                'discount_price' => number_format($add_discount_price,2),
                'main_image' =>$main_image_url,
                'images' =>'',
                'status' =>$request->status
            ]
        );
        if($add_product_control == true){
            return  redirect('/admin/urunekle')->with('message', 'Ürün Eklendi')->with('statu', 'success');
        }
        else{
            return  redirect('/admin/urunekle')->with('message', 'Ürün Eklenmedi !')->with('statu', 'danger');
        }
    }
    /*
    public function product_list()
    {
        $products = Product::all();

        foreach ($products as $product) {
            $product->status = status($product->status);
        }

        return view("admin.product_list")->with('products', $product);
    }

    public function store(Request $request)
    {
        if($request->hasfile('main_image') ){

            $file  = $request->file('main_image');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path.'/images/',$name);
        }

        $passport->filename = $name;
        $passport->save();
    }
    */

    public function main_image_upload($request){

        if ($request->hasFile('main_image') ){
            $image               = $request->file('main_image');
            $image_name          = time().'.'.$image->getClientOriginalExtension();
            $path                = '/images/products/'.date('Y-m');
            $destination_path    = public_path($path);
            $image->move($destination_path,$image_name);
            return $path.'/'.$image_name;
        }
        else{
            return false;
        }
    }

    public function image_show($image_name){
        $url = Storage::url($image_name);
        return $url;
    }
}


