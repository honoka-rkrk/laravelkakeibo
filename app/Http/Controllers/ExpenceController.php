<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expence;
use App\Models\Category;

class ExpenceController extends Controller
{
    public function index(){
        $expences = Expence::all();

        $category=Category::where('category_id',$expences->id)->get();

        return view('expences.index',[
            'expences'=>$expences,
            'category'=>$category,
        ]);
    }

    
}
