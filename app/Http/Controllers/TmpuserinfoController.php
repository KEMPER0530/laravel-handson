<?php

namespace App\Http\Controllers;

use App\Tmpuserinfo;
use Illuminate\Http\Request;

class TmpuserinfoController extends Controller
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
        $tmpuserinfo = Tmpuserinfo::orderBy('id', 'asc')->get();
        dd($tmpuserinfo->toArray());
        return view('tmpuserinfo.index', ['tmpuserinfo' => $tmpuserinfo]);
    }
}
