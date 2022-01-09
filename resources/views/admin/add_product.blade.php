@extends('layouts.admin.amaster')

@section('title', 'E-Market Admin Panel')

@section("top_menu")
	@include('admin.atop_menu')
@endsection

@section("left_menu")
	@include('admin.aleft_menu')
@endsection

@section("content")
 <link rel="stylesheet" href="{{url('/')}}/assets/admin/plugins/summernote/summernote-bs4.css">
 <style>
     textarea{
         width: 100%;
         height: 400px;
         font-size: 14px;
         line-height: 18px;
         border: 1px solid #dddddd;
         padding: 10px;
     }
 </style>
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Ürün Ekleme</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/')}}/admin">Anasayfa</a></li>
						<li class="breadcrumb-item active">Ürün Ekle</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Ürünler Ekleme</h3>
                <H6>
                    @if($message = Session::get('success'))
                        {{ $message }}
                    @endif
                </H6>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
                            <h3 class="card-title">Kategori Listesi</h3>
                            @if( \Session::has('message') )
                                <div class="alert alert-{{ \Session::get('statu') }}">
                                    <p>{{ \Session::get('message') }}</p>
                                </div><br />
                            @endif
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="table table-bordered">
                                <tbody>
                                    <form aciton="/admin/urunekle" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <tr>
                                            <td>Ürün Adı: </td>
                                            <td><input type="text" name="name" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Ürün Seri No: </td>
                                            <td><input type="text" name="serial_no" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Keywords Anahtar Kelime:</td>
                                            <td title="Arama Motorları"> <input type="text" name="keywords"
                                                                                class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Kısa Ürün Açıklaması:</td>
                                            <td>
                                                <textarea name="short_description" id="" cols="30" rows="5"
                                                          class="form-control"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Genel Ürün Açıklaması:</td>
                                            <td>
                                                <textarea class="textarea" name="description" required></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ürün Türü: </td>
                                            <td><input type="text" name="product_type"  class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Ürün Kategori: </td>
                                            <td>
                                                    <select name="category_id" class="form-control" required>
                                                    <option value="" selected>Kategori Seç</option>
                                                        @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ürün Etiketleri: </td>
                                            <td>
                                                    <select name="tag_id" class="form-control" required>
                                                    <option value="" selected>Etiket Seç</option>
                                                    @foreach($tags as $tag)
                                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                        @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Stok Miktarı: </td>
                                            <td><input type="text" name="quantity"  class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Kdv'siz Fiyatı: </td>
                                            <td><input type="text" name="reguler_price" id="not_tax_price"
                                                       class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Kdv Oranı % (Yüzdelik Oran): </td>
                                            <td><input type="text" name="tax_rate" id=tax_rate class="form-control"
                                                       value="18" required></td>
                                        </tr>
                                        <tr>
                                            <td>Ürün Kdv Tahil Fiyatı: </td>
                                            <td>
                                                <input type="text" name="kdv_reguler_price" id="add_tax_price"
                                                       class="form-control" disabled>
                                                <div style="font-size: 12px;"><strong>Kdv Miktarı:</strong>
                                                    <span id="tax_quantity"></span>TL</div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>İndirim Oranı % (Yüzdelik Oran): </td>
                                            <td><input type="text" name="discount_range" id="discount_rate"
                                                       class="form-control" value="0"></td>
                                        </tr>
                                            <tr>
                                            <td>Kdv Dahil İndirim Fiyatı: </td>
                                            <td>
                                                <input type="text" name="discount_price" id="discount_rate_price"
                                                       class="form-control" disabled>
                                                <div style="font-size: 12px;"><strong>İndirim Miktarı:</strong>
                                                    <span id="discount_quantity"></span>TL</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Aktiflik Durumu: </td>
                                            <td>
                                                <select name="status" id=""  class="form-control" required>
                                                <option value="1">Evet</option>
                                                <option value="0">Hayır</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ana Ürün Fotğrafı Seç: </td>
                                            <td><input type="file" name="main_image" value="Seç"
                                                       class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Ürün Fotğrafları Seç: </td>
                                            <td><input type="file" name="images" value="Seç" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" name="submit" value="Kaydet"
                                                       class="btn btn-primary"></td>
                                        </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@section('text_area_editor')
<script src="{{url('/')}}/assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script>
$(function () {
    // Summernote
    $('.textarea').summernote();
})

$("#not_tax_price").change(function(){
    var tax_rate      = $("#tax_rate").val();
    var add_tax_price = Number(this.value)+(Number(this.value)*(tax_rate/100));
    var tax_quantity  = add_tax_price-Number(this.value);
    $("#add_tax_price").val(add_tax_price.toFixed(2));
    $("#tax_quantity").html(tax_quantity.toFixed(2));
});


$("#discount_rate").change(function(){
    var add_tax_price     = $("#add_tax_price").val();
    var discount_price    = ((100 - Number(this.value)) / 100) * Number(add_tax_price);
    var discount_quantity = add_tax_price-discount_price;
    $("#discount_rate_price").val(discount_price.toFixed(2));
    $("#discount_quantity").html(discount_quantity.toFixed(2));

});
</script>
@endsection

@section("footer")
	@include('admin.afooter')
@endsection
