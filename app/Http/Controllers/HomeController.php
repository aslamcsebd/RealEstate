<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;

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

   // Status change
   public function changeStatus(Request $request){
      $model = $request->model;
      $field = $request->field;
      $id = $request->id;
      $tab = $request->tab;

      $itemId = DB::table($model)->find($id);
      ($itemId->$field == true) ? $action=$itemId->$field = false : $action=$itemId->$field = true;     
      DB::table($model)->where('id', $id)->update([$field => $action]);
      return response()->json(['message' => 'Status updated successfully.']);
   }

   
}
