<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\helpers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
		return view("admin.home");
    }
    public function get_add_tag()
    {
        $tags = Tag::all();
        return view("admin.add_tag")->with('tags', $tags);
    }

    public function post_add_tag(Request $request)
    {
        DB::table('tags')->insert(
            ['name' => $request->get('name')]
        );
        return  redirect('/admin/etiketekle');

    }

    public function delete_add_tag($id)
    {
        DB::table('tags')->where('id', '=', $id)->delete();
        return  redirect('/admin/etiketekle');
    }

    public function get_add_category()
    {
        $categories   = Category::all();
        $category_arr = array();
        foreach($categories as $category){
            $category_arr[$category->id] = $category->name;
        }
        return view("admin.add_category")->with('categories', $categories)->with('category_arr', $category_arr);
    }

    public function post_add_category(Request $request)
    {
        DB::table('categories')->insert(
            ['top_category_id' => $request->get('top_category_id'),'name' => $request->get('name')]
        );
        return  redirect('/admin/kategoriekle');
    }

    public function delete_add_category($id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();
        DB::table('categories')->where('top_category_id', '=', $id)->delete();
        return  redirect('/admin/kategoriekle');
    }

    public function get_edit_category($id)
    {
        $all_categories = Category::all();
        $category_arr   = array();
        $count = 0;
        $categories = DB::table('categories')->find($id);
        return view("admin.edit_category")->with('categories', $categories)->with('all_categories', $all_categories);
    }

    public function post_edit_category(Request $request)
    {
        DB::table('categories')
            ->where('id', $request->get('id'))
            ->update(['name' => $request->get('name'), 'top_category_id' => $request->get('top_category_id')]);
        return  redirect('/admin/kategoriekle');
    }
}
