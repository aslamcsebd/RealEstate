<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Validator;
use Redirect;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Home;
use App\Models\Contact;
use App\Models\SocialSite;

class BackendController extends Controller {
   
// Home
   public function home(){
      $data['Home'] = Home::orderBy('orderBy')->get();
      return view('backend.pages.home', $data);
   }

   public function addHome(Request $request){

      $validator = Validator::make($request->all(),[
         'image'=>'required',
         'title'=>'required',
         'buttonName'=>'required',
         'link'=>'required'
      ]);   
      
      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      $id=DB::table('homes')->latest('orderBy')->first();
      ($id==null) ? $orderId=1 : $orderId=$id->orderBy+1;

      $path="images/home/";
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

      Home::create([
         'image'=>$imageLink,
         'title'=>$request->title,
         'buttonName'=>$request->buttonName,
         'link'=>$request->link,
         'orderBy'=>$orderId
      ]);

      return back()->with('success','Homes\'s image add successfully');
   }

   public function editHome(){
      $data['Home'] = Home::find($_REQUEST['id']);
      return view('backend.pages.ajaxView', $data);
   }

   public function editHome2(Request $request){
      $validator = Validator::make($request->all(),[
         'title'=>'required',
         'buttonName'=>'required',
         'link'=>'required'
      ]);

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }
      $path="home/";
      if ($request->hasFile('image')){
         if($files=$request->file('image')){
            $picture = $request->image;
            $fullName=time().".".$picture->getClientOriginalExtension();
            $files->move(imagePath($path), $fullName);
            $imageLink = imagePath($path). $fullName;

            Home::where('id', $request->id)->update([
               'image'=>$imageLink,
               'title'=>$request->title,
               'buttonName'=>$request->buttonName,
               'link'=>$request->link,
            ]);
            (file_exists($request->oldImage) ? unlink($request->oldImage) : '');
         }
      }else{
         Home::where('id', $request->id)->update([
            'title'=>$request->title,
            'buttonName'=>$request->buttonName,
            'link'=>$request->link,
         ]);
      }
      return back()->with('success','Homes\'s image edit successfully');
   }

   // Status [Active vs Inactive]
   public function itemStatus($id, $model, $tab){
      //Much code because save() function not working...
      $itemId = DB::table($model)->find($id);
      ($itemId->status == true) ? $action=$itemId->status = false : $action=$itemId->status = true;     
      DB::table($model)->where('id', $id)->update(['status' => $action]);
      return back()->with('success', $model.' status change')->withInput(['tab' => $tab]);
   }

// Delete
   public function itemDelete($id, $model, $tab){
      $itemId = DB::table($model)->find($id);
      if (Schema::hasColumn($model, 'image')){
         ($itemId->image!=null) ? (file_exists($itemId->image) ? unlink($itemId->image) : '') : '';
      }
      DB::table($model)->where('id', $id)->delete();
      return back()->with('success', $model.' delete successfully')->withInput(['tab' => $tab]);
   }

// Any title
   public function addAnyTitle(Request $request){
      $validator = Validator::make($request->all(),[
         'description'=>'required',
      ]);

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      AnyTitle::insert([
         'title'=>$request->title,
         'description'=>$request->description,
         'status'=>1,
         'created_at' => Carbon::now()
      ]);
      return back()->with('success', $request->title.' add successfully')->withInput(['tab' => $request->tab]);
   }

   public function editAnyTitle(Request $request){
      $validator = Validator::make($request->all(),[
         'description'=>'required',
      ]);

      if($validator->fails()){
         $messages = $validator->messages(); 
         return Redirect::back()->withErrors($validator);
      }

      AnyTitle::where('id', $request->id)->update([
         'description'=>$request->description
      ]);
      return back()->with('success', $request->title.' update successfully')->withInput(['tab' => $request->tab]);
   }

// Order By
   public function orderBy($model, $id, $targetId, $tab){
      DB::table($model)->where('id', $id)->update(['orderBy' => $targetId]);      
      return back()->with('success', $model.' orderBy change')->withInput(['tab' => $tab]);
   }

}
