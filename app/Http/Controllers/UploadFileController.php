<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadFile;

class UploadFileController extends Controller
{
    function UploadFile(Request $request){
        $path = 'users/file/';
        $file = $request->file('file_upload');
        $new_name = 'UPDF_'.date('Ymd').uniqid().'.pdf';
    
        //Upload new file
        $upload = $file->move(public_path($path), $new_name);
        
        if( !$upload ){
            return response()->json(['status'=>0,'msg'=>'Something went wrong, upload new picture failed.']);
        }else{
            //Get Old file
            $oldPicture = FileUpload::find(Auth::user()->id)->getAttributes()['file'];
    
            if( $oldPicture != '' ){
                if( \File::exists(public_path($path.$oldPicture))){
                    \File::delete(public_path($path.$oldPicture));
                }
            }
    
            //Update DB
            $update = FileUpload::find(Auth::user()->id)->update(['file'=>$new_name]);
    
            if( !$upload ){
                return response()->json(['status'=>0,'msg'=>'Something went wrong, updating picture in db failed.']);
            }else{
                return response()->json(['status'=>1,'msg'=>'Your profile picture has been updated successfully']);
            }
        }
    }
}
