<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticesController extends Controller
{

    /**
     * NoticesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show all notices
     */
    public function index()
    {
        return 'all notices';
    }

    /**
     * Show a page to create a notice
     */
    public function create()
    {
        // get list of providers
        // load a view to create a new notice

        return view('notices.create');
    }
}