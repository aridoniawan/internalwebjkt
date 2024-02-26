<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;

class Kostcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kosts.create');
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

        Kost::insert([
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
        $kost = Kost::where('id', $id)
        ->first();

        // $view_data = [
        //     'post' => $post
        // ];

        return view('kosts.show', compact('kost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewedit()
    {
        $kosts = Kost::get();
        // $view_data = [
        //     'posts' => $posts
        // ];

        return view('kosts.viewedit', compact('kosts'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Kost = Kost::where('id', $id)
                ->first();

        $view_data = [
            'kost' => $Kost
        ];

        return view('kosts.edit', $view_data);
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

        Kost::where('id', $id)
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
        Kost::where('id', $id)
        ->delete();

        return redirect('posts')->with('successd', 'Link Meeting berhasil di hapus.');
    }
}
