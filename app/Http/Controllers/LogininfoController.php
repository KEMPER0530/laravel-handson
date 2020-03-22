<?php

namespace App\Http\Controllers;

use App\Logininfo;
use App\Http\Requests\LogininfoRequest;
use Illuminate\Support\Facades\Hash;
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
        return view('logininfo.index', ['logininfo' => $logininfo]);
    }
    public function edit(Logininfo $logininfo)
    {
        return view('logininfo.edit')->with('logininfo', $logininfo);
    }

    public function update(LogininfoRequest $request, Logininfo $logininfo)
    {
        date_default_timezone_set('Asia/Tokyo');
        $logininfo->id = $request->id;
        $logininfo->username = $request->username;
        $logininfo->name = $request->name;
        $logininfo->save();
        return redirect('/maintenance/logininfo');
    }
    public function create()
    {
        return view('logininfo.create');
    }
    public function destroy(Logininfo $logininfo)
    {
        $logininfo->delete();
        return redirect('/maintenance/logininfo');
    }
    public function store(LogininfoRequest $request)
    {
        date_default_timezone_set('Asia/Tokyo');
        $logininfo = new Logininfo();
        $logininfo->username = $request->username;
        $logininfo->name = $request->name;
        $logininfo->password = Hash::make($request->password);
        $logininfo->save();
        return redirect('/maintenance/logininfo');
    }
}
