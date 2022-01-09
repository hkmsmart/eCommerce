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
					<h1>Ürün Kategori</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{url('/')}}/admin">Anasayfa</a></li>
						<li class="breadcrumb-item active">Ürün Kategori</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Ürünler İçin Kategori</h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                            title="">
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Kategori Listesi</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="table table-bordered">
								<thead>
									<tr>
                                        <th>Üst Kategori Adı</th>
                                        <th>Kategori Adı</th>
                                        <th>Düzenle</th>
										<th>Sil</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($categories as $category)
									<tr>
                                        <td>
                                            @isset($category_arr[$category->top_category_id])
                                                @php
                                                    echo $category_arr[$category->top_category_id];
                                                @endphp
                                            @endisset
                                        </td>
                                        <td>{{$category->name}}</td>
                                        <td><a href="{{url('/')}}/admin/kategoriekle/duzenle/{{$category->id}}"
                                               class="btn btn-block btn-outline-warning btn-sm">Düzenle</a>
                                        </td>
										<td><a href="{{url('/')}}/admin/kategoriekle/{{$category->id}}"
                                               class="btn btn-block btn-outline-danger btn-sm">Sil</a>
                                        </td>
									</tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="3">Kategori Ekle</th>
                                    </tr>
                                    <tr>
                                        <form action="{{url('/')}}/admin/kategoriekle" method="post">
                                            @csrf
                                            <td title="Üst kategori seçilmez ise, kategori ana kategorilere eklenir">
                                                Üst Kategori:
                                                <select name="top_category_id">
                                                    <option value="" selected>Üst Kategori Seç</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                     @endforeach
                                                </select>
                                            </td>
                                            <td>Kategori Adı: <input type="text" name="name"></td>
                                            <td><input type="submit" value="Ekle"
                                                       class="btn btn-block btn-outline-info btn-sm">
                                            </td>
                                        </form>
                                    </tr>
								</tbody>
                            </table>
                        </div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@section("footer")
	@include('admin.afooter')
@endsection
