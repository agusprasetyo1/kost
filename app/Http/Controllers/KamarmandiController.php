<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamar_mandi;

class KamarmandiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kamarmandi'] = Kamar_mandi::all();
        return view('fas_kamarmandi/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fas_kamarmandi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kamar_mandi::create([
            'fasilitas' => $request->fasilitas
        ]);
        return redirect('/admin/faskamarmandi/');        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kamarmandi'] = Kamar_mandi::find($id);
        return view('fas_kamarmandi/edit', $data);
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
        Kamar_mandi::find($id)->update([
            'fasilitas' => $request->fasilitas
        ]);
        return redirect('/admin/faskamarmandi/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kamar_mandi::destroy($id);
        return redirect('/admin/faskamarmandi/');        
    }
}
