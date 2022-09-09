<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Home;
use App\Models\Product;

use App\Models\UsefullLink;
use App\Models\Leadership;
use App\Models\Contact;
use App\Models\SocialSite;

class FrontendController extends Controller{
   
   public function index(){

      $data['Home'] = Home::where('status', 1)->orderBy('orderBy')->get();
      $data['Product'] = Product::where('status', 1)->orderBy('orderBy')->get();

      $data['UsefullLink'] = UsefullLink::where('status', 1)->orderBy('orderBy')->get();
      $data['Leadership'] = Leadership::where('status', 1)->orderBy('orderBy')->get(); 
      $data['Contact'] = Contact::where('status', 1)->orderBy('orderBy')->get();
      $data['SocialSite'] = SocialSite::where('status', 1)->orderBy('orderBy')->get(); 
      
      return view('frontend.home', $data);
   }

   public function who_we_are(){
      $data['info'] = 'This is who we are page';
      return view('frontend.pages.who-we-are', $data);
   }
}
