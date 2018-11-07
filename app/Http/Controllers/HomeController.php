<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Submit;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $request->user()->authorizeRoles(['user', 'admin']);
        if (Auth::user()->hasRole('admin')) {
            return view('layout.okeaja.home');
            }

        elseif (Auth::user()->hasRole('user')) {

            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('layout.okeaja.home')->with('submits', $user->submits);

            }

    }

    public function trending()
    {
        return view('layout.okeaja.trending');
    }

    public function lokasi()
    {
        return view('layout.okeaja.lokasi');
    }

    public function kategori()
    {
        return view('layout.okeaja.kategori');
    }

    public function objek()
    {
        return view('layout.okeaja.objek');
    }

    public function about()
    {
        return view('layout.okeaja.about');
    }
        
}
