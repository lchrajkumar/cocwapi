<?php

namespace App\Http\Controllers;
use App\Worshipverses;
use App\Worshipinfos;
use Illuminate\Http\Request;
use DB;

class WorshipversesController extends Controller
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
        $worshipverses = DB::table('worshipverses')
            ->select('chap_name','chap_number','verse_range','short_note','long_note','winfotime')
            ->join('worshipinfos','worshipverses.worshipinfo_id','=','worshipinfos.id')->get();
        //$worshipverses = Worshipverses::all();
        return view('pages.worshipverses', compact('worshipverses'));
        //return response()->json($worshipverses);
    }

    public function create(Request $request)
    {
        //
        return view('crud.addwverse');
        

    }

    public function WorshipTime()
    {
        $worshiptime = Worshipinfos::all();
        //return response()->json($getworshipinfo);
        return view('crud.addwverse', compact('worshiptime'));
    }

    public function store(Request $request)
    {
        $wverse = new Worshipverses;
        $wverse->chap_name = $request->chap_name;
        $wverse->chap_number = $request->chap_number;
        $wverse->verse_range = $request->verse_range;
        $wverse->short_note = $request->short_note;
        $wverse->long_note = $request->long_note;
        $wverse->worshipinfo_id = $request->worshipinfo_id;
        $wverse->save();
        //dd($wverse);
        return view('successinfo.wvsuccess');
    }

    public function show($winfotime)
    {
        //only for api calls
        //Ok, Now its perfect query.
        $wversetime = DB::table('worshipverses')
            ->select('chap_name','chap_number','verse_range','short_note','winfotime')
            ->join('worshipinfos','worshipverses.worshipinfo_id','=','worshipinfos.id')
            ->where('winfotime','=',$winfotime)->get();
        if($wversetime->isEmpty())
        {
            return response()->json('Data Not found!');
        }
        return response()->json($wversetime);

    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
