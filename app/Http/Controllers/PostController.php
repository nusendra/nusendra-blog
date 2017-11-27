<?php

namespace App\Http\Controllers;

use App\Post;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use Image;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $model = Post::select('id','judul','ringkasan','tgl_terbit','user_id','featured_thumbnail','status_terbit','slug')->with(['user' => function($query){
          $query->select('id','name');
        },'kategoris' => function($q){
          $q->select('kategori');
        }])->get();
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
          'ringkasan' => 'required|max:200|min:10',
          'slug' => 'required',
          'isi' => 'required',
          'status_terbit' => 'required',
          'tgl_terbit' => 'required',
          'kategori' => 'required',
          // 'image' =>'required'
      ]);

      if($val->passes()){
        // $imageData = $request->get('image');
        // $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
        // Image::make($request->get('image'))->save(public_path('image/').$fileName);

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
            // 'featured_thumbnail' => $fileName,
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

    public function show($slug)
    {
        $post = Post::where('slug',$slug)->firstOrFail();
        $kategori = Kategori::select('id','kategori')->get();
        return view('frontend.page.post',compact('post','kategori'));
    }

    public function search(Request $request)
    {
        $post = Post::search($request->param)->get();
        return $post;
    }

    public function edit($id)
    {
        $model = Post::findOrFail($id);
        return $model;
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy($id)
    {
        $model = Post::find($id);
        $model->delete();
        return 1;
    }
}
