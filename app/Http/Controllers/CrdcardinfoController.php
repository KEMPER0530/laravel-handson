<?php

namespace App\Http\Controllers;

use App\Crdcardinfo;
use Illuminate\Http\Request;

class CrdcardinfoController extends Controller
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
        $crdcardinfo = Crdcardinfo::orderBy('id', 'asc')->get();
        dd($crdcardinfo->toArray());
        return view('crdcardinfo.index', ['crdcardinfo' => $crdcardinfo]);
    }
}
