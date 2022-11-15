<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtectedRoutes extends Controller
{
    public function __construct () {
        $this->middleware(['auth']);
    }

    public function payWithCard () {
        return view('pay-with-card');
    }
}
