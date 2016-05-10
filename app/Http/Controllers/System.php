<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class System extends Controller
{
    public function logout()
    {
        session_start();

        session_destroy();
        return redirect('/');
    }
}
