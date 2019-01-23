<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Category;
use App\Tag;
use App\Anecdota;

class PageController extends Controller
{
    
    public function listaAnecdotas(){
    	$anecdotas = Anecdota::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

    	return view('web.anecdotas', compact('anecdotas'));
    }

 public function faq(){
        

        
    }


    /*public function category($slug){
        $category = Category::where('slug', $slug)->pluck('id')->first();

        $anecdotas = Anecdota::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.anecdotas', compact('anecdotas'));
    }*/

    public function tag($slug){ 
        $anecdotas = Anecdota::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.anecdotas', compact('anecdotas'));
    }

    public function anecdota($slug){
    	$anecdota = Anecdota::where('slug', $slug)->first();

    	return view('web.anecdota', compact('anecdota'));
    }

    

}
