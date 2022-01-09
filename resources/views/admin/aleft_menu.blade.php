@section('left_menu')
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="../../index3.html" class="brand-link">
		<img src="{{url('/')}}/assets/admin/dist/img/AdminLTELogo.png"
		alt="AdminLTE Logo"
		class="brand-image img-circle elevation-3"
		style="opacity: .8">
		<span class="brand-text font-weight-light">E-Ticaret Admin Paneli</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="{{url('/')}}/assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Admin, Hoşgeldiniz </a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!-- Add icons to the links using the .nav-icon class
	with font-awesome or any other icon font library -->
	<li class="nav-item">
		<a href="{{url('/')}}/admin" class="nav-link">
			<i class="nav-icon fas fa-th"></i>
			<p>
				Anasayfa
				<!--span class="right badge badge-danger">New</span-->
			</p>
		</a>
	</li>

	<li class="nav-item has-treeview">
		<a href="" class="nav-link">
			<i class="nav-icon fas fa-copy"></i>
			<p>
				Ürün İşlemleri
				<i class="fas fa-angle-left right"></i>
				<span class="badge badge-info right">4</span>
			</p>
		</a>
		<ul class="nav nav-treeview">
			<li class="nav-item">
				<a href="{{url('/')}}/admin/urunekle" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Ürün Ekle</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{url('/')}}/admin/kategoriekle" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Kategori Ekle</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{url('/')}}/admin/etiketekle" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Etiket Ekle</p>
				</a>
			</li>
		</ul>
    </li>
    <li class="nav-item">
		<a href="{{url('/')}}/admin/urunlistesi" class="nav-link">
			<i class="nav-icon fas fa-th"></i>
			<p>
				Ürünleri listele
			</p>
		</a>
	</li>
	<li class="nav-item">
		<a href="" class="nav-link">
			<i class="nav-icon fas fa-th"></i>
			<p>
				Müşteri Mesajları
			</p>
		</a>
	</li>
	<li class="nav-item">
		<a href="" class="nav-link">
			<i class="nav-icon fas fa-th"></i>
			<p>
				Üyeler
			</p>
		</a>
	</li>
	<li class="nav-item">
		<a href="" class="nav-link">
			<i class="nav-icon fas fa-th"></i>
			<p>
				Ayarlar
			</p>
		</a>
	</li>
	<li class="nav-item">
		<a href="" class="nav-link">
			<i class="nav-icon fas fa-th"></i>
			<p>
				Yorumlar
			</p>
		</a>
	</li>
	<li class="nav-item">
		<a href="" class="nav-link">
			<i class="nav-icon fas fa-th"></i>
			<p>
				SSS
			</p>
		</a>
	</li>
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
@endsection
