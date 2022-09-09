<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/clear', function() {
   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "<h1> Cleared!</h1>";
});

Route::get('/', 'FrontendController@index')->name('index');

// Backend
Route::middleware(['auth'])->group(function(){
   
   Route::get('/admin', 'HomeController@admin')->name('admin');
   // left
      // profile image
      Route::get('left/', 'BackendController@left')->name('left');
      Route::post('addPicture/', 'BackendController@addPicture')->name('addPicture');
      Route::get('pictureStatus/{id}/{tab}', 'BackendController@pictureStatus')->name('pictureStatus');        
      Route::get('pictureDelete/{id}/{tab}', 'BackendController@pictureDelete')->name('pictureDelete');             
      
      // home
      Route::get('home/', 'BackendController@home')->name('home');
      Route::post('addHome/', 'BackendController@addHome')->name('addHome');
      Route::get('editHome/', 'BackendController@editHome')->name('editHome');       
      Route::post('editHome2/', 'BackendController@editHome2')->name('editHome2');        
      
      // Product
      Route::get('product/', 'ProductController@product')->name('product');
      Route::post('addProduct/', 'ProductController@addProduct')->name('addProduct');
      Route::get('editProduct/', 'ProductController@editProduct')->name('editProduct');       
      Route::post('editProduct2/', 'ProductController@editProduct2')->name('editProduct2');   
      
      // Usefull link
      Route::get('useful/', 'FooterController@useful')->name('useful');
      Route::post('addUseful/', 'FooterController@addUseful')->name('addUseful');

      // Leadership
      Route::get('leadership/', 'FooterController@leadership')->name('leadership');
      Route::post('addLeadership/', 'FooterController@addLeadership')->name('addLeadership');    
      
      // Social site      
      Route::get('social/', 'FooterController@social')->name('social');

      Route::post('addSocialSite/', 'FooterController@addSocialSite')->name('addSocialSite');
      Route::get('socialStatus/{id}/{tab}', 'FooterController@socialStatus')->name('socialStatus');
      Route::post('editSocialSite/', 'FooterController@editSocialSite')->name('editSocialSite');       
      Route::get('socialDelete/{id}/{tab}', 'FooterController@socialDelete')->name('socialDelete');    
      
   // Contact
      Route::get('contact/', 'FooterController@contact')->name('contact');
     
      Route::post('addContact/', 'FooterController@addContact')->name('addContact');
      Route::post('editContact/', 'FooterController@editContact')->name('editContact');
});

//Front page route
   Route::get('/who-we-are', 'FrontendController@who_we_are')->name('who-we-are');

   // All status change   
      Route::get('itemStatus/{id}/{model}/{tab}','BackendController@itemStatus')->name('itemStatus');
      Route::get('itemDelete/{id}/{model}/{tab}','BackendController@itemDelete')->name('itemDelete');
      
   // Any title
      Route::post('addAnyTitle/', 'BackendController@addAnyTitle')->name('addAnyTitle');
      Route::post('editAnyTitle/', 'BackendController@editAnyTitle')->name('editAnyTitle');

   // Order Change   
      Route::get('orderBy/{model}/{id}/{targetId}/{tab}','BackendController@orderBy')->name('orderBy');

   // Botman
      Route::match(['get', 'post'], '/botman', 'BotManController@handle');
      