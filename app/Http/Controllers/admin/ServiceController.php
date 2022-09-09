<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Redirect;
use DB;
use Carbon\Carbon;

use App\Models\Service;
use App\Models\RealEstate;

class ServiceController extends Controller {

   public function service(){
      $data['Service'] = Service::orderBy('orderBy')->get();
      $data['RealEstate'] = RealEstate::orderBy('orderBy')->get();
      return view('backend.pages.service', $data);
   }

   // addService
   public function addService(Request $request){

      $validator = Validator::make($request->all(),[
         'title'=>'required',
         'image'=>'required',
         'details'=>'required'
      ]);   

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      // $id=DB::table('products')->latest('orderBy')->first();
      $id=Service::latest('orderBy')->first();
      ($id==null) ? $orderId=1 : $orderId=$id->orderBy+1;

      $path="images/service/service/";
      $default="default.jpg";
      if ($request->hasFile('image')){
      if($files=$request->file('image')){
         $image = $request->image;
         $fullName=time().".".$image->getClientOriginalExtension();
         $files->move(public_path($path), $fullName);
         $imageLink = $path. $fullName;
      }
      }else{
         $imageLink = $path . $default;
      }   

      Service::create([
         'image'=>$imageLink,
         'title'=>$request->title,
         'details'=>$request->details,
         'orderBy'=>$orderId
      ]);

      return back()->with('success','Service add successfully');
   }

         


}
