@extends('layouts.admin.amaster')

@section('title', 'E-Market Admin Panel')

@section("top_menu")
	@include('admin.atop_menu')
@endsection

@section("left_menu")
	@include('admin.aleft_menu')
@endsection

@section("content")
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Ürün Listesi</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/')}}/admin">Anasayfa</a></li>
						<li class="breadcrumb-item active">ürün Listesi</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Title</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Ürün Listesi</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Ürün Id</th>
										<th>Ad</th>
										<th>Açıklama</th>
										<th>Fiyat</th>
										<th>İndirimli Fiyatı</th>
										<th>Vergi Oranı</th>
										<th>Stok</th>
										<th>Ürün Aktif mi?</th>
										<th>Kategori</th>
										<<th>Etiket</th>
										<th>Düzenle</th>
										<th>Sil</th>
									</tr>
								</thead>
								<tbody>
									@foreach($products as $product)
									<tr>
										<td>{{$product->id}}</td>
										<td>{{$product->name}}</td>
										<td>{{$product->description}}</td>
										<td>{{$product->reguler_price}}</td>
										<td>{{$product->discount_price}}</td>
										<td>{{$product->taxable}}</td>
										<td>{{$product->quantity}}</td>
										<td>{{$product->status}}</td>
										<td>{{$product->c_id}}</td>
										<td>{{$product->t_id}}</td>
										<td><a href="#" class="btn btn-block btn-outline-warning btn-sm">Düzenle</a></td>
										<td><a href="#" class="btn btn-block btn-outline-danger btn-sm">Sil</a></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
						<div class="card-footer clearfix">
							<ul class="pagination pagination-sm m-0 float-right">
								<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
					<!-- /.card -->
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@section("footer")
	@include('admin.afooter')
@endsection