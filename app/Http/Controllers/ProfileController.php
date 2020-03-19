<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
        $profile = Profile::orderBy('id', 'asc')->get();
        return view('profile.index', ['profile' => $profile]);
    }

    public function edit(Profile $profile)
    {
        // dd($profile->toArray());
        return view('profile.edit')->with('profile', $profile);
    }

    public function update(ProfileRequest $request, Profile $profile)
    {
        $profile->id = $request->id;
        date_default_timezone_set('Asia/Tokyo');
        $profile->lastdate = date("Y/m/t");
        $profile->history = $request->history;
        $profile->save();
        return redirect('/maintenance/profile');
    }
    public function create()
    {
        return view('profile.create');
    }
    public function destroy(Profile $profile)
    {
        //dd($profile->toArray());
        $profile->delete();
        return redirect('/maintenance/profile');
    }
    public function store(ProfileRequest $request)
    {
        $profile = new Profile();
        $profile->id = $request->id;
        date_default_timezone_set('Asia/Tokyo');
        $profile->lastdate = date("Y/m/t");
        $profile->history = $request->history;
        $profile->save();
        return redirect('/maintenance/profile');
    }
}
