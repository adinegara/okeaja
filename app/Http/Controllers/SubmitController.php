<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submit;
use App\User;
use Illuminate\Support\Facades\Auth;


class SubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $submits =  Submit::orderBy('created_at', 'desc')->paginate(5);
        return view('submit.index')->with('submit', $submits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('submit.create');
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
        

        $request->user()->authorizeRoles(['user', 'admin']);
        if (Auth::user()->hasRole('admin')) {
            $this->validate($request, [
                'nama_objek' => 'required',
                'alamat' => 'required',
                'htm' => 'required',
                'buka' => 'required',
                'tutup' => 'required'
            ]);

        //new Submit

        $submits = new Submit;
        $submits->nama_objek = $request->input('nama_objek');
        $submits->alamat = $request->input('alamat');
        $submits->htm = $request->input('htm');
        $submits->buka = $request->input('buka');
        $submits->tutup = $request->input('tutup');
        $submits->user_id = auth()->user()->id;
        $submits->save();
            return redirect('/submit');
            }

        elseif (Auth::user()->hasRole('user')) {
            $this->validate($request, [
                'nama_objek' => 'required',
                'alamat' => 'required',
                'htm' => 'required',
                'buka' => 'required',
                'tutup' => 'required'
            ]);

        //new Submit

        $submits = new Submit;
        $submits->nama_objek = $request->input('nama_objek');
        $submits->alamat = $request->input('alamat');
        $submits->htm = $request->input('htm');
        $submits->buka = $request->input('buka');
        $submits->tutup = $request->input('tutup');
        $submits->user_id = auth()->user()->id;
        $submits->save();

            return redirect('/home')->with('success', 'Submit Diterima');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_submit)
    {
        //
        $submits = Submit::find($id_submit);


        return view('submit.show')->with('submit', $submits);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_submit)
    {
        //
        $submits = Submit::find($id_submit);
         return view('submit.edit')->with('submit', $submits);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_submit)
    {
        //
        $this->validate($request, [
                'nama_objek' => 'required',
                'alamat' => 'required',
                'htm' => 'required',
                'buka' => 'required',
                'tutup' => 'required'
            ]);

        //edit Submit

        $submits = Submit::find($id_submit);
        $submits->nama_objek = $request->input('nama_objek');
        $submits->alamat = $request->input('alamat');
        $submits->htm = $request->input('htm');
        $submits->buka = $request->input('buka');
        $submits->tutup = $request->input('tutup');
        $submits->user_id = auth()->user()->id;
        $submits->save();

        return redirect('/submit')->with('success', 'Edit Sukses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_submit)
    {
        //
        $submits = Submit::find($id_submit);
        $submits->delete();
        return redirect('/submit')->with('success', 'Submit Removed');
    }
}
