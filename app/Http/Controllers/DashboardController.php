<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard/index');
    }

    public function cart()
    {
        return view('dashboard/shoppingcart');
    }

    public function favorite()
    {
        return view('dashboard/favorite');
    }
}
