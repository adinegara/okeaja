<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Submit;
use App\Acc;

class AccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $accs =  Acc::orderBy('created_at', 'desc')->paginate(5);
        return view('acc.index')->with('acc', $accs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('acc.create');
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
                'submit_id' => 'required',
                'status_acc' => 'required']);

        //Acc

        $accs = new Acc;
        $accs->submit_id = $request->input('submit_id');
        $accs->status_acc = $request->input('status_acc');
        $accs->save();

        return redirect('/acc')->with('success', 'Acc Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_acc)
    {
        //
        $accs = Acc::find($id_acc);
        $aa = DB::table('submits')->get();

        return view('acc.show', compact('aa'))->with('acc', $accs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_acc)
    {
        //
        $accs = acc::find($id_acc);
        return view('acc.edit')->with('acc', $accs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_acc)
    {
        //
        $this->validate($request, [
                
                'status_acc' => 'required']);

        //Acc

        $accs = Acc::find($id_acc);
        $accs->status_acc = $request->input('status_acc');
        $accs->save();

        return redirect('/acc')->with('success', 'Acc Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_acc)
    {
        //
        $accs = Acc::find($id_acc);
        $accs->delete();
        return redirect('/acc')->with('success', 'Post Removed');
    }
}
