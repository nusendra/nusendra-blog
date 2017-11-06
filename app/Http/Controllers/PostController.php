<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;

class PostController extends Controller
{
    public function index()
    {
        $model = Post::all();
        return $model;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $val = Validator::make($request->all(),[
          'judul' => 'required',
          'ringkasan' => 'required',
          'slug' => 'required',
          'isi' => 'required',
          'status_terbit' => 'required',
          'tgl_terbit' => 'required',
          'kategori' => 'required',
      ]);

      if($val->passes()){
        $post = Post::updateOrCreate(
          ['id' => $request->id],
          [
            'judul'         => $request->judul,
            'ringkasan'     => $request->ringkasan,
            'slug'          => $request->slug,
            'isi'           => $request->isi,
            'status_terbit' => $request->status_terbit,
            'tgl_terbit'    => $request->tgl_terbit,
            'user_id'       => Auth::user()->id,
            'created_by'    => Auth::user()->id
          ]
        );
        $post->kategoris()->sync($request->kategori);
        $status = 1;
      }else{
        $status = response()->json($val->messages(),422);
      }
      return $status;
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
