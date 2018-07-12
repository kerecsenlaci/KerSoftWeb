<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gyik;

class GyikController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gyik = Gyik::all();
        return view('gyik')->withData($gyik);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('message', 'Elküldve');

        return redirect()->route('gyik.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gyik = Gyik::findOrFail($id);
        return view('gyikPage')->withData($gyik);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gyik = Gyik::findOrFail($id);
        return view('gyikPageEdit')->withData($gyik);
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
        $gyik = Gyik::findOrFail($id);
        $gyik->title = $request->title;
        $gyik->content = $request->content;
        $gyik->save();
        return redirect()->route('gyik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gyik::destroy($id);
        return redirect()->route('gyik.index');
    }
}
