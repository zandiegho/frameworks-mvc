<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserPost;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'rol.admin']);
    }

    public function index(){
        $users = User::orderBy('created_at' , 'desc')->paginate(10);
        return view('dashboard.users.index' , ['users' => $users]);
    }

    public function create(){
        return view( 'dashboard.users.create' , [ 'user' => new User()] );
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */


    public function store(StoreUserPost $request){
        User::create(
            [
                'name' => $request['name'],
                'rol_id' => 1, //rol de admin
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]
        );
        return back()->with('status', 'Usuario creado con exito');
    }

}
