<?php

namespace App\Http\Controllers;

use App\Crdcardinfo;
use App\Http\Requests\CrdcardinfoRequest;
use Illuminate\Support\Facades\Hash;
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
        return view('crdcardinfo.index', ['crdcardinfo' => $crdcardinfo]);
    }

    public function edit(Crdcardinfo $crdcardinfo)
    {
        return view('crdcardinfo.edit')->with('crdcardinfo', $crdcardinfo);
    }

    public function update(CrdcardinfoRequest $request, Crdcardinfo $crdcardinfo)
    {
        date_default_timezone_set('Asia/Tokyo');
        $crdcardinfo->id = $request->id;
        $crdcardinfo->cardnumber = $request->cardnumber;
        $crdcardinfo->cardname = $request->cardname;
        $crdcardinfo->cardmonth = $request->cardmonth;
        $crdcardinfo->cardyear = $request->cardyear;
        $crdcardinfo->save();
        return redirect('/maintenance/crdcardinfo');
    }
    public function create()
    {
        $maxUserId = crdcardinfo::max('id') + 1;
        return view('crdcardinfo.create', compact('maxUserId'));
    }
    public function destroy(Crdcardinfo $crdcardinfo)
    {
        $crdcardinfo->delete();
        return redirect('/maintenance/crdcardinfo');
    }
    public function store(CrdcardinfoRequest $request)
    {
        date_default_timezone_set('Asia/Tokyo');
        $crdcardinfo = new Crdcardinfo();
        $crdcardinfo->cardnumber = $request->cardnumber;
        $crdcardinfo->cardname = $request->cardname;
        $crdcardinfo->cardmonth = $request->cardmonth;
        $crdcardinfo->cardyear = $request->cardyear;
        $crdcardinfo->cardcvv = Hash::make($request->cardcvv);
        $crdcardinfo->save();
        return redirect('/maintenance/crdcardinfo');
    }
}
