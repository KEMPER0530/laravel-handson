<?php

namespace App\Http\Controllers;

use App\Tmpuserinfo;
use Illuminate\Http\Request;
use App\Http\Requests\TmpuserinfoRequest;

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
        return view('tmpuserinfo.index', ['tmpuserinfo' => $tmpuserinfo]);
    }
    public function edit(Tmpuserinfo $tmpuserinfo)
    {
        return view('tmpuserinfo.edit')->with('tmpuserinfo', $tmpuserinfo);
    }

    public function update(TmpuserinfoRequest $request, Tmpuserinfo $tmpuserinfo)
    {
        date_default_timezone_set('Asia/Tokyo');
        $tmpuserinfo->id = $request->id;
        $tmpuserinfo->username = $request->username;
        $tmpuserinfo->name = $request->name;
        $tmpuserinfo->save();
        return redirect('/maintenance/tmpuserinfo');
    }

    public function destroy(Tmpuserinfo $tmpuserinfo)
    {
        $tmpuserinfo->delete();
        return redirect('/maintenance/tmpuserinfo');
    }
}
