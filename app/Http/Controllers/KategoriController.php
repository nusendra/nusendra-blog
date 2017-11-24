<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;

class KategoriController extends Controller
{
    public function index()
    {
        $model = Kategori::select('id','kategori')->get();
        return $model;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $val = Validator::make($request->all(),[
          'kategori' => 'required'
      ]);

      if($val->passes()){
        Kategori::updateOrCreate(
          ['id' => $request->id],
          [
            'kategori'        => $request->kategori,
            'created_by'      => Auth::user()->id
          ]
        );
        $status = 1;
      }else{
        $status = response()->json($val->messages(),422);
      }
      return $status;
    }

    public function show($kategori)
    {
        $posts = Post::whereHas('kategoris',function($q) use($kategori){
            $q->where('kategori',$kategori);
        })->get();
        return view('frontend.page.kategoriPost',compact('posts','kategori'));
    }

    public function edit(Kategori $kategori)
    {
        $model = $kategori->kategori;
        return $model;
    }

    public function update(Request $request, Kategori $kategori)
    {
        //
    }

    public function destroy(Kategori $kategori)
    {
        //
    }
}
