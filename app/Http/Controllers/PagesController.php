<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {

        // $this->middleware('auth');

    }

    public function index() {
        return view('pages.index');
    }

    public function home(){
        return view('bucketlist.index');
    }
}
