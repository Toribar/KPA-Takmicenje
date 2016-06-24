<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Competitor;
use App\Club;
use App\Category;
use DB;

class CompetitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Competitor::orderBy('serial');

        if ($request->search) {
            $query->where('serial', 'like', "%{$request->search}%");
        }

        $competitors = $query->paginate();

        return view('competitors.index', compact('competitors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubs = Club::orderBy('name')->lists('name', 'id');

        $categories = Category::orderBy('name')->lists('name', 'id');

        $serial = DB::table('competitors')->max('serial');
        $nextSerial = $serial + 1;

        return view('competitors.create', compact('clubs', 'categories', 'nextSerial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $competitor = new Competitor($request->all());

        $competitor->save();

        return redirect()->route('competitors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $competitor = Competitor::findOrFail($id);

        return view('competitors.show', compact('competitor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competitor = Competitor::findOrFail($id);

        $clubs = Club::orderBy('name')->lists('name', 'id');

        $categories = Category::orderBy('name')->lists('name', 'id');

        return view('competitors.edit', compact('competitor', 'clubs', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $competitor = Competitor::findOrFail($id);

        $competitor->update($request->all());

        return redirect()->route('competitors.show', $competitor->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
