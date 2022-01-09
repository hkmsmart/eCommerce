@extends('layouts.admin.amaster')

@section('title', 'E-Market Admin Panel')

@section("top_menu")
	@include('admin.atop_menu')
@endsection

@section("left_menu")
	@include('admin.aleft_menu')
@endsection

@section("content")
	@include('admin.acontent')
@endsection

@section("footer")
	@include('admin.afooter')
@endsection
