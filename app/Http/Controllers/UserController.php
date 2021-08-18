<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function todosLosRegistros()
    {
        $users = User::all();
        //Select * from users
        return view('users.todos-los-registro',compact('users'));
    }

    public function consultaPorId()
    {
        return "Hola desde consulta con filtro";
    }
}
