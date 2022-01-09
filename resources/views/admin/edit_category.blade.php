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
							<h3 class="card-title">Kategori Düzenle</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="table table-bordered">
								<thead>
									<tr>
                                        <th>Üst Kategori Adı</th>
                                        <th>Kategori Adı</th>
                                        <th></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
                                    <tr>
                                        <form action="{{url('/')}}/admin/kategoriekle/duzenle" method="post">
                                            @csrf
                                            <td>
                                                <select name="top_category_id">
                                                    <option value="" class="">Yok</option>
                                                    @foreach($all_categories as $category)
                                                        @if($category->id != $categories->id)
                                                            @if($category->id == $categories->top_category_id)
                                                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                                            @else
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endif
                                                        @endif
                                                     @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="name" value="{{$categories->name}}">
                                                <input type="hidden" name="id" value="{{$categories->id}}">
                                            </td>
                                            <td><input type="submit" value="Kaydet" class="btn btn-block btn-outline-info btn-sm"></td>
                                            <td><a type="submit" class="btn btn-block btn-outline-warning btn-sm">Sil</a></td>
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
