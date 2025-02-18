<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use Auth;

class SavingController extends Controller
{
    public function getGoal()
    {
        return response()->json(Goal::where('user_id', Auth::id())->get());
    }

    public function postGoal(Request $request)
    {
        $request->validate([
            'target_name' => 'required|string|max:255',
            'target_amount' => 'required|numeric|min:1',
        ]);

        $goal = Goal::create([
            'user_id' => Auth::id(),
            'name' => $request->target_name,
            'target' => $request->target_amount,
            'savings' => 0,
        ]);

        return response()->json($goal, 201);
    }

    public function delete($id){
        $goal = Goal::where('id',$id)->where('user_id', Auth::id())->first();
        if(!$goal)
            return response()->json(['error' => 'Цель не найдена'], 404);
        
        $goal->delete();
        return response()->json(['message' => 'Цель удалена'], 200);    
    }
}
