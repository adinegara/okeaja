<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Submit;


class AdminController extends Controller
{
    //
    public function index(Request $request)
    {
    	$request->user()->authorizeRoles(['user', 'admin']);
        if (Auth::user()->hasRole('admin')) {
            return view('layout.okeaja.admin');
            }

        elseif (Auth::user()->hasRole('user')) {

            return view('layout.okeaja.home');

        }
	}
}
