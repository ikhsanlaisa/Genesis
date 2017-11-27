<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisi;

class DivisiController extends Controller
{
    public function index(){
      $divisi = Divisi::all();
      return view('admin.divisi')->with('divisi', $divisi);
    }

    public function create(){
      return view('admin.tambahdivisi');
    }

    public function store(Request $request){
      $div = $request->file('foto');
      $divs = $div->getClientOriginalName();
      $div->move("images/divisi/", $divs);

      $create = new Divisi();
      $create->divisi = $request->input('divisi');
      $create->koordinator = $request->input('koordinator');
      $create->description = $request->input('desc');
      $create->foto = $divs;
      $result =$create->save();

      if ($result) {
        return redirect('/tambahdivisi')->with(['message' => 'Berhasil Tambah Divisi']);
      }else {
        return redirect('/tambahdivisi')->with(['message' => 'Gagal Tambah Divisi']);
      }

    }
}
