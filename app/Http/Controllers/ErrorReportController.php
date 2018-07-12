<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ErrorReportController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('error_report');
    }

    public function store(Request $request)
    {
        Session::flash('message', 'Hibabejelentés sikeresen elküldve.');

        return redirect()->route('error_report');
    }
}
