<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadFile;
use Auth;
use DB;

class UploadFileController extends Controller
{
    function UploadFile(Request $request){
        if($request->id_ormawa == 'RKAT'){
            $jenis="RKAT";
        }
        else{
            $jenis="NON-RKAT";
        }

        $query = DB::table('upload_files')
            ->selectRaw('MAX(RIGHT(id_ormawa,5)) as id_ormawa');
        if($query->count()>0)
        {
            foreach($query->get() as $id)
            {
                $tmp = ((int)$id->id_ormawa)+1;
                $id_ormawa = $jenis.sprintf("%05s", $tmp);
            }
        }
        else
        {
            $id_ormawa = $jenis."00001";
        }
    
        //Upload new file
        
        if(!empty($request->file_upload)){
                
            $path = 'users/file/';
            $file = $request->file('file_upload');
            $nama_file = $jenis.'_'.date('Ymd').uniqid().'.pdf';
            $upload = $file->move(public_path($path), $nama_file);
        }

        if( !$upload ){
            return response()->json(['status'=>0,'msg'=>'File Masih Kosong']);
        }else{

            $laporan = new UploadFile;
            $laporan->nama_kegiatan = $request->kegiatan;
            $laporan->tanggal_kegiatan = $request->tanggal;
            $laporan->id_ormawa = $id_ormawa;
            $laporan->status = $nama_file;
            $laporan->pengirim = Auth::user()->name;
            $hasil = $laporan->save();
    
            if( !$hasil ){
                // return response()->json(['status'=>0,'msg'=>'Gagal mengirim Proposal.']);
                return redirect()->back()->with(['status'=>0,'msg'=>'Gagal mengirim Proposal.']);
            }else{
                // return response()->json(['status'=>1,'msg'=>'Sukses Mengirim Proposal']);
                return redirect()->back()->with(['status'=>1,'msg'=>'Sukses Mengirim Proposal']);
            }
        }
    }
}
