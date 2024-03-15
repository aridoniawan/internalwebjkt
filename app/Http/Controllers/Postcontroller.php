<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Post;
use App\Models\Post2;
use Illuminate\Http\Request;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Auth;

class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::sortable()->orderBy('id', 'desc')->paginate(10);
        // $view_data = [
        //     'posts' => $posts
        // ];
        $kosts = Kost::sortable()->orderBy('id', 'desc')->paginate(10);

        return view('posts.index', compact('posts'), compact('kosts'));
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewedit()
    {

        if(!Auth::check())
        {
            return redirect('login');
        }
        $posts = Post::get();
        $view_data = [
            'posts' => $posts
        ];

        return view('posts.viewedit', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tanggal = $request->input('tanggal');
        $jam = $request->input('jam');
        $email = $request->input('email');
        $aplikasi = $request->input('aplikasi');
        $agenda = $request->input('agenda');
        $reqby = $request->input('reqby');
        $detail = $request->input('detail', 'Wait From IT');
        $link = $request->input('link', 'Wait From IT');
        $rmeeting = $request->input('rmeeting');

        Post::insert([
            'tanggal' => $tanggal,
            'jam' => $jam,
            'email' => $email,
            'aplikasi' => $aplikasi,
            'agenda' => $agenda,
            'reqby' => $reqby,
            'detail' => $detail,
            'link' => $link,
            'rmeeting' => $rmeeting,
        ]);

        return redirect('posts')->with('success', 'Link Meeting berhasil dipesan.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $post = Post::where('id', $id)
                ->first();
        
        $view_data = [
            'post' => $post
        ];

        return view('posts.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)
                ->first();
        
        $view_data = [
            'post' => $post
        ];

        return view('posts.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tanggal = $request->input('tanggal');
        $jam = $request->input('jam');
        $email = $request->input('email');
        $aplikasi = $request->input('aplikasi');
        $agenda = $request->input('agenda');
        $reqby = $request->input('reqby');
        $detail = $request->input('detail', 'Wait From IT');
        $link = $request->input('link', 'Wait From IT');
        $rmeeting = $request->input('rmeeting');

        Post::where('id', $id)
            ->update([
                'tanggal' => $tanggal,
                'jam' => $jam,
                'email' => $email,
                'aplikasi' => $aplikasi,
                'agenda' => $agenda,
                'reqby' => $reqby,
                'detail' => $detail,
                'link' => $link,
                'rmeeting' => $rmeeting,
            ]);
        
        return redirect("posts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)
        ->delete();

        return redirect('posts')->with('successd', 'Link Meeting berhasil di hapus.');
    }
}
