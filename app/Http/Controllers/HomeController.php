<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     // return view('home');
    //     if(auth()->user()){
    //         // ---route-name----
    //         return view('admin.index');
    //     }
    // }
    public function index()
    {
        if(auth()->check()) {
            $role = auth()->user()->role;

            if($role == 0) {
                return redirect('adminhome');
            } else {
                return redirect('/');
            }
        }
        return redirect()->route('/');
    }

}

