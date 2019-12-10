<?php
//Ajax
  //user
Route::get('/loadUserData','UserController@loadData')->name('admin.user.data');

//menu
Route::get('/loadMenuData','MenuController@loadData')->name('admin.menu.data');

//slider

Route::get('/loadSliderData','SliderController@loadData')->name('admin.slider.data');

//page
Route::get('/loadPageData','PageController@loadData')->name('admin.page.data');


//contact
Route::get('/loadContactData','ContactController@loadData')->name('admin.contact.data');

//category
Route::get('/loadCategoryData','CategoryController@loadData')->name('admin.category.data');

//brand
Route::get('/loadBrandData','BrandController@loadData')->name('admin.brand.data');


//Product
Route::get('/loadProductData','ProductController@loadData')->name('admin.product.data');

//order
Route::get('/loadOrderData','OrderController@loadData')->name('admin.order.data');


//load
  Route::get('/','HomeController@index')->name('admin.home');
  
//Settings
Route::get('/setting','SettingController@index')->name('setting.index');
Route::post('/setting','SettingController@update')->name('setting.update');


  //user
Route::resource('/user','UserController');
Route::get('/user/{id}/delete','UserController@confirmation')->name('user.delete');
Route::PATCH('/user/{id}/password','UserController@password')->name('user.password');

//page

Route::resource('/page','PagerController');
Route::get('/page/{id}/delete','PageController@confirmation')->name('page.delete');

//slider
Route::resource('/slider','SliderController');
Route::get('/slider/{id}/delete','SliderController@confirmation')->name('slider.delete');

//menu
Route::resource('/menu','MenuController');
Route::get('/menu/{id}/delete','MenuController@confirmation')->name('menu.delete');

//contact
Route::resource('/contact','ContactController' ,['only' => ['index' ,'show' ,'destroy']]);
Route::get('/contact/{id}/delete','ContactController@confirmation')->name('contact.delete');

//category
Route::resource('/category','CategoryController');
Route::get('/category/{id}/delete','CategoryController@confirmation')->name('category.delete');


//Brand
Route::resource('/brand','BrandController');
Route::get('/brand/{id}/delete','BrandController@confirmation')->name('brand.delete');


//product
Route::resource('/product','ProductController');
Route::get('/product/{id}/delete','ProductController@confirmation')->name('product.delete');

//order
Route::resource('/order','OrderController' ,['only' => ['index' ,'show' ,'destroy','update']]);
Route::get('/order/{id}/delete','OrderController@confirmation')->name('order.delete');


