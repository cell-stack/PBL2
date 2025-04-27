<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            (object)[
                'name' => 'Jhon Doe',
                'email' => 'jhon.doe@gmail.com',
                'telephone' => '0844556677',
                'username' => 'Jhon756',
            ],
            (object)[
                'name' => 'Jhon Doe',
                'email' => 'jhon.doe@gmail.com',
                'telephone' => '0844556677',
                'username' => 'Jhon756',
            ],
            (object)[
                'name' => 'Jhon Doe',
                'email' => 'jhon.doe@gmail.com',
                'telephone' => '0844556677',
                'username' => 'Jhon756',
            ],
        ];

        return view('dashboard.users.index', compact('users'));
    }
}
