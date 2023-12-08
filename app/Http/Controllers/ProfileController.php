<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profil ()
    {
    
        return view ('profile.profil',[
            'pageTitle' => 'profile 1',
            'conten' => 'ini halaman profile',
            'name'=>'Azman S',
            'email'=>'azmansyakurr@gmail.com',
            "image" => "azman.png"
        ]);
}
}


