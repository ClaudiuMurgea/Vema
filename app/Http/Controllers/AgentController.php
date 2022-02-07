<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;


class AgentController extends Controller
{

    public function index () {
        $agent = new Agent();
        $result = $agent->isDesktop();
        return view ('layouts.app')->with('result', $result);
    }

    public function show () {
        $agent = new Agent();
        $result = $agent->isDesktop();
        return view('layouts.view')->with('result', $result);
    }
}
