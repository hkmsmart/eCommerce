<?php
Route::get("/admin/login", "admin\LoginController@get_login");
Route::post("/admin/login", "admin\LoginController@post_login");

Route::get("/admin/logout", "admin\LoginController@get_logout");

Route::get("/admin/register", "admin\LoginController@get_register");
Route::post("/admin/register", "admin\LoginController@post_register");

Route::get("/","front\HomeController@index");
Route::get("/login", "front\HomeController@login");
Route::get("/register", "front\HomeController@register");
Route::get("/forgetPassword", "front\HomeController@forget_password");

Route::get("/admin","admin\HomeController@index");

Route::get("/admin/etiketekle", "admin\HomeController@get_add_tag");
Route::post("/admin/etiketekle", "admin\HomeController@post_add_tag");
Route::get("/admin/etiketekle/{id}", "admin\HomeController@delete_add_tag");

Route::get("/admin/kategoriekle", "admin\HomeController@get_add_category");
Route::post("/admin/kategoriekle", "admin\HomeController@post_add_category");
Route::get("/admin/kategoriekle/{id}", "admin\HomeController@delete_add_category");
Route::get("/admin/kategoriekle/duzenle/{id}", "admin\HomeController@get_edit_category");
Route::post("/admin/kategoriekle/duzenle/", "admin\HomeController@post_edit_category");

//Route::get("/admin/urunlistesi", "admin\ProductController@product_list");
Route::get("/admin/urunlistesi","admin\HomeController@index");

Route::get("/admin/urunekle", "admin\ProductController@get_add_product");
Route::post("/admin/urunekle","admin\ProductController@post_add_product");
