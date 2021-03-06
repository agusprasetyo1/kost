<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fas_kamar;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['faskamar'] = Fas_kamar::all();
        return view('fas_kamar/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fas_kamar/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fas_kamar::create([
            'fasilitas' => $request->fasilitas
        ]);
        return redirect('/admin/faskamar/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['faskamar'] = Fas_kamar::find($id);
        return view('fas_kamar/edit', $data);
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
        Fas_kamar::find($id)->update([
            'fasilitas' => $request->fasilitas
        ]);

        return redirect('/admin/faskamar/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fas_kamar::destroy($id);
        return redirect('/admin/faskamar/');        
    }
}
