<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balance;
use App\Models\Operation;
use Auth;

class HomeController extends Controller
{
    public function getBalance()
    {
        return response()->json(Balance::where('user_id',Auth::id())->get());
    }

    public function getOperation()
    {
        return response()->json(Operation::where('user_id',Auth::id())->get());
    }
}
