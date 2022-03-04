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
// Route::routes();

//------------------------------------------ User---------------------------------------------------
Route::get('/', "User\HomeController@index")->name("index");
Route::get('/product', "User\ProductController@index")->name("product");
Route::get('/productsingle/{id?}', "User\ProductSingleController@index")->name("productsingle");
Route::get('/contact', "User\ContactController@index")->name("contact");
Route::get('/about', "User\AboutController@index")->name("about");

// //Shopping Cart
Route::resource('/cart', "User\CartController");
Route::get('addcart/{id}', "User\CartController@addCart")->name("addcart");

//CHECK OUT
Route::get('checkout', "User\CheckoutController@getFormPay")->middleware('checklogin')->name("checkout");
Route::get('checkout_success', "User\CheckoutController@success")->name("checkout_success");
Route::post('checkout_post', "User\CheckoutController@postFormPay")->name("checkout_post");





//------------------------------------------ Admin---------------------------------------------------
Route::get('/admin/admin_index', "Admin\AdminController@index")->middleware(['auth','role:admin'])->name("admin_index");
Route::get('/admin/admin_product_single', "Admin\ProductSingleController@index")->name("admin_product_single");
Route::get('/admin/admin_picture', "Admin\PictureController@index")->name("admin_picture");
Route::get('/admin/admin_product', "Admin\ProductController@index")->name("admin_product");
Route::get('/admin/admin_customer', "Admin\CustomerController@index")->name("admin_customer");
// Route::get('/admin/pdf', "Admin\PDFController@index");

// Route::get('/admin/admin_user', "Admin\UserController@index")->name("admin_user");



//Bill
Route::resource('bill', "Admin\BillController");
Route::get('/print_bill/{checkout_code}', "Admin\BillController@print_bill")->name("print_bill");

// CUSTOMER
Route::resource('customer', 'Admin\CustomerController');
Route::get('/search_customer', 'Admin\CustomerController@search')->name('search_customer');

//Add Product 
Route::get('/admin/add_product', "Admin\ProductController@create")->name("add_product");
Route::post('/admin/add_product', "Admin\ProductController@store")->name("add_product");

//Edit Product 
Route::get('/admin/edit_product/{id}', "Admin\ProductController@edit")->name("edit_product");
Route::post('/admin/update_product/{id}', "Admin\ProductController@update")->name("update_product");

//Delete Product 
Route::get('/admin/delete_product/{id}', "Admin\ProductController@destroy")->name("delete_product");


//Add Product Single
Route::get('/admin/add_product_single', "Admin\ProductSingleController@create")->name("add_product_single");
Route::post('/admin/add_product_single', "Admin\ProductSingleController@store")->name("add_product_single");

//Edit Product Single
Route::get('/admin/edit_product_single/{id}', "Admin\ProductSingleController@edit")->name("edit_product_single");
Route::post('/admin/update_product_single/{id}', "Admin\ProductSingleController@update")->name("update_product_single");

//Delete Product Single
Route::get('/admin/delete_product_single/{id}', "Admin\ProductSingleController@destroy")->name("delete_product_single");

//Add User
Route::get('/admin/add_user', "Admin\UserController@create")->name("add_user");
Route::post('/admin/add_user', "Admin\UserController@store")->name("add_user");

//Edit User
Route::get('/admin/edit_user/{id}', "Admin\UserController@edit")->name("edit_user");
Route::post('/admin/update_user/{id}', "Admin\UserController@update")->name("update_user");

//Delete User
Route::get('/admin/delete_user/{id}', "Admin\UserController@destroy")->name("delete_user");


//Add Picture
Route::get('/admin/add_picture', "Admin\PictureController@create")->name("add_picture");
Route::post('/admin/add_picture', "Admin\PictureController@store")->name("add_picture");
//Edit Picture
Route::get('/admin/edit_picture/{id}', "Admin\PictureController@edit")->name("edit_picture");
Route::post('/admin/update_picture/{id}', "Admin\PictureController@update")->name("update_picture");

//Delete Product Single
Route::get('/admin/delete_picture/{id}', "Admin\PictureController@destroy")->name("delete_picture");

//STATISTICS
Route::get('/statistic/index', 'Admin\StatisticalController@index')->name('/statistic/index');
Route::get('/statistic/bill_pay', 'Admin\StatisticalController@getBill')->name("/statistic/bill_pay");

// ROLES
Route::resource('role', 'Admin\RolesController');
// Route::get('/search_role', 'Admin\RolesController@search')->name('search_role');

// USERS
Route::resource('user', 'Admin\UserController');
// Route::get('/search_user', 'Admin\UsersController@search')->name('search_user');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 




Auth::routes();