<?php

namespace App\Http\Controllers;

use App\Work;
use App\Http\Requests\WorkRequest;
use Illuminate\Http\Request;

class WorkController extends Controller
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
        $work = Work::orderBy('work_id', 'asc')->get();
        return view('work.index', ['work' => $work]);
    }

    public function edit(Work $work)
    {
        return view('work.edit')->with('work', $work);
    }

    public function update(WorkRequest $request, Work $work)
    {
        $work->work_id = $request->work_id;
        date_default_timezone_set('Asia/Tokyo');
        $work->title = $request->title;
        $work->comment = $request->comment;
        $work->url = $request->url;

        if( empty( $request->ref ) ) {
            $work->ref = 0;
        } else {
            $work->ref = $request->ref;
        }
        $work->save();
        return redirect('/maintenance/work');
    }

    public function create()
    {
        $maxUserId = Work::max('work_id') + 1;
        return view('work.create', compact('maxUserId'));
    }

    public function destroy(Work $work)
    {
        $work->delete();
        return redirect('/maintenance/work');
    }

    public function store(WorkRequest $request)
    {
        $work = new Work();
        $work->work_id = $request->work_id;
        date_default_timezone_set('Asia/Tokyo');
        $work->title = $request->title;
        $work->comment = $request->comment;
        $work->url = $request->url;
        if( empty( $request->ref ) ) {
            $work->ref = 0;
        } else {
            $work->ref = $request->ref;
        }
        $work->save();
        return redirect('/maintenance/work');
    }
}
