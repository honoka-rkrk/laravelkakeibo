<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expence;
use App\Models\Category;
use App\Http\Requests\CreateExpence;

class ExpenceController extends Controller
{
    public function index(){
        $expences = Expence::all();

        $title=[];

        foreach($expences as $expence){
            $category=Category::where('id',$expence->category_id)->first();
            $title[]=$category->title;
        }

        return view('expences.index',[
            'expences'=>$expences,
            'category'=>$title
        ]);
    }

    public function showCreateForm(){
        $categories=Category::all();
        return view('expences/create',['categories'=>$categories]);
    }

    public function create(CreateExpence $request){
        //エクスペンスモデルのインスタンスを作成する
        $expence=new Expence();

        //インスタンスに入力値を代入する
        $expence->category_id=$request->category_id;
        $expence->money=$request->money;
        $expence->memo=$request->memo;
        $expence->write_date=$request->write_date;

        $expence->save();

        return redirect()->route('expences.index',[1]);
    }

    
}
