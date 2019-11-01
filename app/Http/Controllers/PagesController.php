<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PagesController extends Controller
{
    public function index(){
        $data = array (
            'title' => 'Home',
            'services' => ['Laravel','CodeIgniter','Bootstrap','Flutter']
        );
        //return view('pages.services');
        return view('pages.index')->with($data);
    }
    public function minyak(){
        $posts = Posts::orderBy('id_minyak','asc')->paginate(10);
        return view('pages.minyak')->with('posts', $posts);
    }
    public function jenis(){
        $data = array (
            'title' => 'Data Jenis Minyak',
            'services' => ['Laravel','CodeIgniter','Bootstrap','Flutter']
        );
        //return view('pages.services');
        return view('pages.jenis')->with($data);
    }
}
