<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;
use Validator;
use Redirect;
use DB;
use Carbon\Carbon;

use App\Models\Product;

class ProductController extends Controller{

// Product
    public function product(){
        $data['Product'] = Product::orderBy('orderBy')->get();
        return view('backend.pages.product', $data);
    }

    public function addProduct(Request $request){

        $validator = Validator::make($request->all(),[
        'image'=>'required',
        'title'=>'required',
        'details'=>'required',
        'price'=>'required'
        ]);   
        
        if($validator->fails()){
            $messages = $validator->messages(); 
            return Redirect::back()->withErrors($validator);
        }

        $id=DB::table('products')->latest('orderBy')->first();
        ($id==null) ? $orderId=1 : $orderId=$id->orderBy+1;

        $path="images/product/";
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

        Product::create([
            'image'=>$imageLink,
            'title'=>$request->title,
            'details'=>$request->details,
            'price'=>$request->price,
            'orderBy'=>$orderId
        ]);

        return back()->with('success','Product add successfully');
    }

    // public function editHome(){
    //     $data['Home'] = Home::find($_REQUEST['id']);
    //     return view('backend.pages.ajaxView', $data);
    // }

    // public function editHome2(Request $request){
    //     $validator = Validator::make($request->all(),[
    //     'title'=>'required',
    //     'buttonName'=>'required',
    //     'link'=>'required'
    //     ]);

    //     if($validator->fails()){
    //     $messages = $validator->messages(); 
    //     return Redirect::back()->withErrors($validator);
    //     }
    //     $path="home/";
    //     if ($request->hasFile('image')){
    //     if($files=$request->file('image')){
    //         $picture = $request->image;
    //         $fullName=time().".".$picture->getClientOriginalExtension();
    //         $files->move(imagePath($path), $fullName);
    //         $imageLink = imagePath($path). $fullName;

    //         Home::where('id', $request->id)->update([
    //             'image'=>$imageLink,
    //             'title'=>$request->title,
    //             'buttonName'=>$request->buttonName,
    //             'link'=>$request->link,
    //         ]);
    //         (file_exists($request->oldImage) ? unlink($request->oldImage) : '');
    //     }
    //     }else{
    //     Home::where('id', $request->id)->update([
    //         'title'=>$request->title,
    //         'buttonName'=>$request->buttonName,
    //         'link'=>$request->link,
    //     ]);
    //     }
    //     return back()->with('success','Homes\'s image edit successfully');
    // }
}
