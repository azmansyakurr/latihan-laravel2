<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user ()
    {
        return view ('user',[
            'pageTitle' => 'user 1',
            'conten' => 'ini halaman user'
        ]);
     } 
}
