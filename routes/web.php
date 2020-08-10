<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//front-end
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');

//danh mục sản phẩm trang chủ
Route::get('/danh-muc/{category_id}','CategoryProduct@show_category_home');
Route::get('/thuong-hieu/{brand_id}','BrandProduct@show_brand_home');


//back-end
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@showdashboard');
Route::get('/logout','AdminController@logout'); //đăng xuất
Route::post('/admin-dashboard','AdminController@dashboard'); //đăng nhập

//category-product danh mục sản phẩm
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');
//ẩn hiển sản phẩm
Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product'); 
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product'); 
//lưu
Route::post('/save-category-product','CategoryProduct@save_category_product');



//brand-product thương hiệu sản phẩm
Route::get('/add-brand-product','BrandProduct@add_brand_product');
Route::get('/edit-brand-product/{brand_id}','BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_id}','BrandProduct@delete_brand_product');
Route::get('/all-brand-product','BrandProduct@all_brand_product');
Route::post('/update-brand-product/{brand_id}','BrandProduct@update_brand_product');
//ẩn hiển sản phẩm
Route::get('/unactive-brand-product/{brand_id}','BrandProduct@unactive_brand_product'); 
Route::get('/active-brand-product/{brand_id}','BrandProduct@active_brand_product'); 
//lưu
Route::post('/save-brand-product','BrandProduct@save_brand_product');


//product sản phẩm
Route::get('/add-product','ProductController@add_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('/all-product','ProductController@all_product');
Route::post('/update-product/{product_id}','ProductController@update_product');
//ẩn hiển sản phẩm
Route::get('/unactive-product/{product_id}','ProductController@unactive_product'); 
Route::get('/active-product/{product_id}','ProductController@active_product'); 
//lưu
Route::post('/save-product','ProductController@save_product');



