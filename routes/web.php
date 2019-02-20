<?php


Route::get('/', 'ProductController@getindex');
Route::get('/home', 'ProductController@getindex');
Route::post('/search_data', ['uses'=>'ProductController@getsearch',
'as'=>'product.search']);
Route::get('/category/{name}', ['uses'=>'ProductController@getcategory',
'as'=>'product.category']);
Auth::routes();
 Route::resource('/projects', 'ProductController');


Route::group(['middleware'=>'auth'],function(){

Route::post('/', [
	'uses'=>'CartController@getaddtocart',
		'as'=> 'product.addToCart']);

Route::get('/userprofile','CartController@getprofile');


Route::get('/shopping-cart', ['uses'=>'CartController@getcart',
'as'=>'product.shoppingCart']);
Route::get('/sendmail', ['uses'=>'ProductController@sendmail',
'as'=>'user.sendmail']);
Route::post('/sendmail', ['uses'=>'ProductController@postmail',
'as'=>'user.sendmail']);


Route::resource('/carts', 'CartController');
Route::patch('/carts/{id}','CartController@update');



Route::get('/checkout', ['uses'=>'CartController@getcheckout',
'as'=>'checkout']);
Route::post('/checkout', ['uses'=>'CartController@postcheckout',
'as'=>'checkout']);
});
