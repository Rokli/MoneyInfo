<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; 
use Auth;
class BudgetController extends Controller
{
    public function getCategory()
    {
        return response()->json(Category::where('user_id',Auth::id())->get());
    }

    public function postCategory(Request $request)
    {
        $typeCategory = [
            'income' => false,
            'expense' => true
        ];
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_type' => 'required'
        ]);
        Category::create([
            'user_id' => Auth::id(),
            'name' => $request->category_name,
            'type' => $typeCategory[$request->category_type],
        ]);
        return route('budget');
    }
}