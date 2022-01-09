<!DOCTYPE html>
<html lang="tr">
	<head>
		<title>@yield("title")</title>
		<meta name="description" content="@yield('description')">
		<meta name="keywords" content="@yield('keywords')">
		<!-- ALL STYLESHEET -->
		<link href="assets/front/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/front/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/front/css/style.css" rel="stylesheet">
		<link href="assets/front/css/responsive.css" rel="stylesheet">
	</head>
	<body>
		@yield("header")
		@yield("slider")
		@yield("service")
		@yield('featured_product')
		@yield('emarket_adds')
		@yield('best_selling')
		@yield("special_price")
		@yield("product_info")
		@yield("recent_post")
		@yield("sponsor")
		@yield("social_icons")
		@yield("footer")
		<!-- ALL JAVASCRIPT -->         
		<script src="assets/front/js/jquery.js"></script>
		<script src="assets/front/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/front/js/custom.js"></script>
	</body>
</html>