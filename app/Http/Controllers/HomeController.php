<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\User;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin','user']);
       $datos  = Usuario::All();
       return view('home',['datos' => $datos]);
    }
    
   
    
    
}
