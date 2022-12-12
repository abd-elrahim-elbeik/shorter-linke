<?php

namespace App\Http\Controllers;
use App\Models\Link;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LinksController extends Controller
{
    public function index(Request $request){

        // $query = Link::query();
        // $id=$request->query('id');
        // dd($query);


        $link = Link::latest()->paginate(1);

        return view('sa',compact('link'));
    }


    public function store(Request $request){


        $request->validate([
            'link' => 'required'
        ]);

        $linke = Link::create([
            'link' => $request->link,
            'code' => Str::random(6),
        ]);
        return redirect()->route('links.index');


        // $request->merge(['code'=>Str::random(6) ]);



        // $short = Link::create($request->all());

        // return view('dashboard',compact('short')) ;

    }

    public function getlink($code)
    {
        $finde = Link::where('code' , $code)->first();
        return redirect($finde->link);
    }
}


