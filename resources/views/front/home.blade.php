@extends('layouts.front.fmaster')

@section('title', 'E-Market')
@section('keywords', 'E market')
@section('description', 'E market')

@section("header")
	@include('front.fheader')
@endsection

@section("slider")
	@include('front.fslider')
@endsection

@section("service")
	@include('front.fservice')
@endsection

@section("featured_product")
	@include('front.ffeatured_product')
@endsection

@section("emarket_adds")
	@include('front.femarket_adds')
@endsection

@section("best_selling")
	@include('front.fbest_selling')
@endsection

@section("special_price")
	@include('front.fspecial_price')
@endsection

@section("product_info")
	@include('front.fproduct_info')
@endsection

@section("recent_post")
	@include('front.frecent_post')
@endsection

@section("sponsor")
	@include('front.fsponsor')
@endsection

@section("social_icons")
	@include('front.fsocial_icons')
@endsection

@section("footer")
	@include('front.ffooter')
@endsection