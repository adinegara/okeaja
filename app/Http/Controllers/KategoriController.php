<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoris =  Kategori::orderBy('created_at', 'desc')->paginate(5);
        return view('kategori.index')->with('kategori', $kategoris);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategori.create');
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
                'Nama' => 'required']);

        //create Kategori

        $kategoris = new Kategori;
        $kategoris->Nama = $request->input('Nama');
        $kategoris->save();

        return redirect('/kategori')->with('success', 'Kategori Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kategori)
    {
        //

        $kategoris = Kategori::find($id_kategori);

        return view('kategori.show')->with('kategori', $kategoris);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kategori)
    {
        //
         $kategoris = Kategori::find($id_kategori);
         return view('kategori.edit')->with('kategori', $kategoris);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kategori)
    {
        //
        $this->validate($request, [
                'Nama' => 'required']);

        //create Kategori

        $kategoris = Kategori::find($id_kategori);
        $kategoris->Nama = $request->input('Nama');
        $kategoris->save();

        return redirect('/kategori')->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kategori)
    {
        //
        $kategoris = Kategori::find($id_kategori);
        $kategoris->delete();
        return redirect('/kategori')->with('success', 'Post Removed');
    }
}
