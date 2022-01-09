<!DOCTYPE html>
<html lang="tr">
	<head>
		<title>@yield("title")</title>
		<meta name="description" content="@yield('description')">
		<meta name="keywords" content="@yield('keywords')">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{url('/')}}/assets/admin/plugins/fontawesome-free/css/all.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="{{url('/')}}/assets/admin/dist/css/adminlte.min.css">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
			@yield('top_menu')
			@yield('left_menu')
			@yield('content')
			@yield('footer')
			<aside class="control-sidebar control-sidebar-dark">
			</aside>
			<!-- ALL JAVASCRIPT -->
			<script src="{{url('/')}}/assets/admin/plugins/jquery/jquery.min.js"></script><!-- jQuery -->
			<script src="{{url('/')}}/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- Bootstrap 4 -->
			<script src="{{url('/')}}/assets/admin/dist/js/adminlte.min.js"></script><!-- AdminLTE App -->
			<script src="{{url('/')}}/assets/admin/dist/js/demo.js"></script><!-- AdminLTE for demo purposes -->

            @yield('text_area_editor')

        </div>
	</body>
</html>
