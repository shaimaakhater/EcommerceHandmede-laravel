<?php

//View::share('Site_Template', Request::root() . '/public/panal');
//View::share('Admin_Template', Request::root() . '/public/panal');
//admin group
Route::group(['middleware' => ['auth','admin'],'namespace'=>'Admin','prefix'=>'admin']
  ,function(){
 require_once __DIR__ .'/admin.php';
});
//user group
Route::group(['middleware' => ['auth']],function(){
    require_once __DIR__ .'/user.php';
   });
   require_once __DIR__ .'/vistor.php';


