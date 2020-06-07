<?php

namespace App\Http\Controllers;

use App\Accesslog;
use Illuminate\Http\Request;
use App\Http\Requests\AccesslogRequest;

class AccesslogController extends Controller
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
        $accesslog = Accesslog::orderBy('id', 'asc')->get();
        return view('accesslog.index', ['accesslog' => $accesslog]);
    }
    public function edit(Accesslog $accesslog)
    {
        return view('accesslog.edit')->with('accesslog', $accesslog);
    }

    public function update(AccesslogRequest $request, Accesslog $accesslog)
    {
    }

    public function destroy(Accesslog $accesslog)
    {
        $accesslog->delete();
        return redirect('/maintenance/accesslog');
    }
}
