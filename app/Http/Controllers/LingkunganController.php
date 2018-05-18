<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lingkungan;

class LingkunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['lingkungan'] = Lingkungan::all();
        return view('lingkungan/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lingkungan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lingkungan::create([
            'fasilitas' => $request->akses
        ]);
        return redirect('/admin/lingkungan/');                
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['lingkungan'] = Lingkungan::find($id);
        return view('lingkungan/edit', $data);
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
        Lingkungan::find($id)->update([
            'fasilitas' => $request->akses
        ]);
        return redirect('/admin/lingkungan/');                        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lingkungan::destroy($id);
        return redirect('/admin/lingkungan/');                        
    }
}
