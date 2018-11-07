<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objek;
use App\Acc;
Use App\Wilayah;
Use App\Kategori;

class ObjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objeks =  Objek::orderBy('created_at', 'desc')->paginate(5);
        return view('objek.index')->with('objek', $objeks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('objek.create');
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
                'acc_id' => 'required',
                'nama_objek' => 'required',
                'kategori_id' => 'required',
                'wilayah_id' => 'required',
                'htm' => 'required',
                'jarakKm' => 'required',
                'buka' => 'required',
                'tutup' => 'required',
                'deskripsi' => 'required'
            ]);

        //new Objek

        $objeks = new Objek;
        $objeks->acc_id = $request->input('acc_id');
        $objeks->nama_objek = $request->input('nama_objek');
        $objeks->kategori_id = $request->input('kategori_id');
        $objeks->wilayah_id = $request->input('wilayah_id');
        $objeks->htm = $request->input('htm');
        $objeks->jarakKm = $request->input('jarakKm');
        $objeks->buka = $request->input('buka');
        $objeks->tutup = $request->input('tutup');
        $objeks->deskripsi = $request->input('deskripsi');
        $objeks->save();

        return redirect('/objek')->with('success', 'objek Diterima');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_objek)
    {
        //
        $objeks = Objek::find($id_objek);

        return view('objek.show')->with('objek', $objeks);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_objek)
    {
        //
        $objeks = Objek::find($id_objek);
         return view('objek.edit')->with('objek', $objeks);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_objek)
    {
        //
        $this->validate($request, [
                'acc_id' => 'required',
                'nama_objek' => 'required',
                'kategori_id' => 'required',
                'wilayah_id' => 'required',
                'htm' => 'required',
                'jarakKm' => 'required',
                'buka' => 'required',
                'tutup' => 'required',
                'deskripsi' => 'required'
            ]);

        //new Objek

        $objeks = Objek::find($id_objek);
        $objeks->acc_id = $request->input('acc_id');
        $objeks->nama_objek = $request->input('nama_objek');
        $objeks->kategori_id = $request->input('kategori_id');
        $objeks->wilayah_id = $request->input('wilayah_id');
        $objeks->htm = $request->input('htm');
        $objeks->jarakKm = $request->input('jarakKm');
        $objeks->buka = $request->input('buka');
        $objeks->tutup = $request->input('tutup');
        $objeks->deskripsi = $request->input('deskripsi');
        $objeks->save();

        return redirect('/objek')->with('success', 'objek Diterima');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_objek)
    {
        //
        $objeks = Objek::find($id_objek);
        $objeks->delete();
        return redirect('/objek')->with('success', 'Objek Removed');
    }
}
