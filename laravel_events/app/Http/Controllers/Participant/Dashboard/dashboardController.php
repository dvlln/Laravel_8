<?php

namespace App\Http\Controllers\Participant\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        return view('participant.dashboard.index');
    }
}
