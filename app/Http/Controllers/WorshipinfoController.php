<?php

namespace App\Http\Controllers;

//use App\Worshipverses;
use App\Worshipinfos;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

class WorshipinfoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $worshipinfo = Worshipinfos::all();
        return view('pages.worshipinfo', compact('worshipinfo'));
        //return response()->json($worshipinfo);
    }

    public function create()
    {
        //
        return view('crud.addwinfo');
    }

    public function store(Request $request)
    {
        $winfo = new Worshipinfos;
        $winfo->winfotime = $request->winfotime;
        $winfo->save();
        return view('successinfo.wisuccess');
    }

    public function show(Worshipinfos $winfo)
    {
        //only for api calls

    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    //
}
