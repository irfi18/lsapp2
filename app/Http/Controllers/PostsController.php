<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use DB;

class PostsController extends Controller
{
    public function minyak_add(){
        $posts = Posts::all();
        return view('pages.minyak_add')->with ('posts',$posts);
        //return view('pages.minyak_add');
    }
    public function jenis_add(){
        $posts = Posts::all();
        return view('pages.jenis_add')->with ('posts',$posts);
    }
    public function store(Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'stok' => 'required',
            'tgl_produksi' => 'required',
            'tgl_distribusi' => 'required',
            'kode_jenis' => 'required'
        ]);
        
        $posts = new Posts;
        $posts->nama = $request->input('nama');
        $posts->stok = $request->input('stok');
        $posts->tgl_produksi = $request->input('tgl_produksi');
        $posts->tgl_distribusi = $request->input('tgl_distribusi');
        $posts->kode_jenis = $request->input('kode_jenis');
        $posts->save();
        return redirect ('/minyak')->with('success','Post Created');
    }
    public function store2(Request $request){
        $this->validate($request,[
            'kode_jenis' => 'required',
            'nama' => 'required',
            'keterangan' => 'required'
        ]);
        
        $posts = new Posts;
        $posts->kode_jenis = $request->input('kode_jenis');
        $posts->nama = $request->input('nama');
        $posts->keterangan = $request->input('keterangan');
        $posts->save();
        return redirect ('/jenis')->with('success','Post Created');
    }
}
