<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadFile;

class ViewController extends Controller
{
    public function view(UploadFile $uploadfile)
    {
        return view('dashboards.admins.details.view', ['view' => $uploadfile]);
    }

    public function delete(UploadFile $deletefile)
    {
        # code...
        $deletefile->delete();

        return redirect()->route('admin.dashboard')->with('sukses', "Hapus data $deletefile->pengirim berhasil");
    }
}
