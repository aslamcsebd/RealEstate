<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Home;
use App\Models\Product;

use App\Models\UsefullLink;
use App\Models\Leadership;
use App\Models\Contact;
use App\Models\SocialSite;

class HomeController extends Controller{
 
   public function admin(Request $request){
      $data['Home'] = Home::all();
      $data['Product'] = Product::all();

      $data['UsefullLink'] = UsefullLink::all();
      $data['Leadership'] = Leadership::all(); 
      $data['Contact'] = Contact::all();
      $data['SocialSite'] = SocialSite::all(); 
   
      return view('backend.index', $data);
   }
   
}
