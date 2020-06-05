<?php

/*
|-----------------------------------------------------------------------
| Front End Routes
|------------------------------------------------------------------------
*/

Route::get('/','WelcomeController@index')->name('home');

Route::get('/category-product/{id}','WelcomeController@categoryProduct')->name('category.product');

Route::get('/product-details/{id}','WelcomeController@productDetails')->name('product.details');

Route::resource('cart','FrontEnd\CartController');
Route::get('add-to-cart/{id}','FrontEnd\CartController@addToCart');
Route::get('/show-cart','FrontEnd\CartController@showCart');
Route::get('/remove-to-cart/{id}/{q}','FrontEnd\CartController@removeToCart');

Route::get('check-out','FrontEnd\CheckOutController@checkOut');
Route::get('user-register','FrontEnd\UserController@register')->name('user.register');
Route::post('user-register','FrontEnd\UserController@registerSave')->name('register.store');
Route::resource('billing','FrontEnd\BillingController');
Route::get('cart-coupon/{id}','FrontEnd\CartController@addToInput');
Route::get('coupon/{id}','FrontEnd\CartController@couponCode');
Route::get('discount-implement/{id}','BackEnd\DiscountController@discountImplement');
Route::get('session-remove','FrontEnd\CartController@removeSession');



/*
|-----------------------------------------------------------------------
| Backend Routes
|------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function(){
	Route::get('dashboard','SuperController@index');
	Route::resource('category','BackEnd\CategoryController');
	Route::get('unpublish-category/{id}','BackEnd\CategoryController@unPublish');
	Route::get('publish-category/{id}','BackEnd\CategoryController@publish');
	Route::get('delete-category/{id}','BackEnd\CategoryController@delete');

	Route::resource('menufacture','BackEnd\MenufactureController');
	Route::get('delete-menufacture/{id}','BackEnd\MenufactureController@delete');
	Route::get('unpublish-menufacture/{id}','BackEnd\MenufactureController@unPublish');

	Route::get('publish-menufacture/{id}','BackEnd\MenufactureController@publish');
	Route::resource('product','BackEnd\ProductController');
		Route::get('unpublish-product/{id}','BackEnd\ProductController@unPublish');
	Route::get('publish-product/{id}','BackEnd\ProductController@publish');
	Route::get('delete-product/{id}','BackEnd\ProductController@delete');
	Route::resource('supplier','BackEnd\SupplierController');
	Route::resource('inventory', 'BackEnd\InventoryController')->except([ 'edit','update','destroy']);
	Route::resource('image', 'BackEnd\ImageController');
	Route::get('delete-image/{id}','BackEnd\ImageController@delete');
	Route::resource('option', 'BackEnd\OptionController')->except([ 'show']);
	Route::get('delete-option/{id}','BackEnd\OptionController@delete');
	Route::resource('discount', 'BackEnd\DiscountController')->except([ 'show']);
	Route::get('delete-discount/{id}','BackEnd\DiscountController@delete');
	Route::resource('coupon', 'BackEnd\CouponController')->except([ 'show']);
	Route::get('delete-coupon/{id}','BackEnd\CouponController@delete');

});


