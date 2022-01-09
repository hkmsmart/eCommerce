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
						<li class="breadcrumb-item active">Ürün Etiket</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Ürünler İçin Etiketler</h3>

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
							<h3 class="card-title">Etiket Listesi</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Etiket Adı</th>
										<th>Sil</th>
									</tr>
								</thead>
								<tbody>
									@foreach($tags as $tag)
									<tr>
										<td>{{$tag->name}}</td>
										<td><a href="{{url('/')}}/admin/etiketekle/{{$tag->id}}" class="btn btn-block btn-outline-danger btn-sm">Sil</a></td>
									</tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="2">Etiket Ekle</th>
                                    </tr>
                                    <tr>
                                        <form action="{{url('/')}}/admin/etiketekle" method="post">
                                            @csrf
                                            <td>Etiket Adı: <input type="text" name="name"></td>
                                            <td><input type="submit" value="Ekle" class="btn btn-block btn-outline-info btn-sm"></td>
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
