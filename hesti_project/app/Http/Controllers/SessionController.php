<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(Request $request){
        $request->session()->put('Hesti', 'Politeknik Negeri Jember');
        echo "Data telah ditambahkan ke session";
    }
    // menampilkan isi session
    public function show(Request $request){
        if($request->session()->has('name')){
            echo $request->session()->get('nama');
        }else{
            echo "Tidak ada data dalam session.";
        }
    }
    // mengapus session
    public function delete(Request $request){
        $request->session()->forget('nama');
        echo "Data telah dihapus dari session.";
    }
}
