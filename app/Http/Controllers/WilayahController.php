<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wilayah;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wilayahs =  Wilayah::orderBy('created_at', 'desc')->paginate(5);
        return view('wilayah.index')->with('wilayah', $wilayahs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('wilayah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
                'provinsi' => 'required',
                'kabupaten' => 'required',
                'kecamatan' => 'required',
                'deskripsi' => 'required'
            ]);

        //create Wilayah

        $wilayahs = new Wilayah;
        $wilayahs->provinsi = $request->input('provinsi');
        $wilayahs->kabupaten = $request->input('kabupaten');
        $wilayahs->kecamatan = $request->input('kecamatan');
        $wilayahs->deskripsi = $request->input('deskripsi');
        $wilayahs->save();

        return redirect('/wilayah')->with('success', 'Kategori Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_wilayah)
    {
        //
        $wilayahs = Wilayah::find($id_wilayah);

        return view('wilayah.show')->with('wilayah', $wilayahs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_wilayah)
    {
        //
         $wilayahs = Wilayah::find($id_wilayah);
         return view('wilayah.edit')->with('wilayah', $wilayahs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_wilayah)
    {
        //
        $this->validate($request, [
                'provinsi' => 'required',
                'kabupaten' => 'required',
                'kecamatan' => 'required',
                'deskripsi' => 'required'
            ]);

        //create Wilayah

        $wilayahs = Wilayah::find($id_wilayah);
        $wilayahs->provinsi = $request->input('provinsi');
        $wilayahs->kabupaten = $request->input('kabupaten');
        $wilayahs->kecamatan = $request->input('kecamatan');
        $wilayahs->deskripsi = $request->input('deskripsi');
        $wilayahs->save();

        return redirect('/wilayah')->with('success', 'Kategori Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_wilayah)
    {
        //
        $wilayahs = Wilayah::find($id_wilayah);
        $wilayahs->delete();
        return redirect('/wilayah')->with('success', 'Post Removed');
    }
}
