<?php

namespace App\Http\Controllers;

use App\Logininfo;
use Illuminate\Http\Request;

class LogininfoController extends Controller
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

    //
    public function index()
    {
        $logininfo = Logininfo::orderBy('id', 'asc')->get();
        dd($logininfo->toArray());
        return view('logininfo.index', ['logininfo' => $logininfo]);
    }
}
