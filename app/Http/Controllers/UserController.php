<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\User;

class UserController extends Controller
{
   function index(){

        return view('dashboards.users.index');
   }

   function profile(){
       return view('dashboards.users.profile');
   }
   function settings(){
       return view('dashboards.users.settings');
   }
   function calender(){
        // return view('dashboards.users.calender');
    }


   function updatePicture(Request $request){
    $path = 'users/images/';
    $file = $request->file('admin_image');
    $new_name = 'UIMG_'.date('Ymd').uniqid().'.jpg';

    //Upload new image
    $upload = $file->move(public_path($path), $new_name);
    
    if( !$upload ){
        return response()->json(['status'=>0,'msg'=>'Something went wrong, upload new picture failed.']);
        }
    else{
        //Get Old picture
        $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

        if( $oldPicture != '' ){
            if( \File::exists(public_path($path.$oldPicture))){
                \File::delete(public_path($path.$oldPicture));
            }
        }

        //Update DB
        $update = User::find(Auth::user()->id)->update(['picture'=>$new_name]);

        if( !$upload ){
            return response()->json(['status'=>0,'msg'=>'Something went wrong, updating picture in db failed.']);
        }else{
            return response()->json(['status'=>1,'msg'=>'Your profile picture has been updated successfully']);
        }
    }
}
}
