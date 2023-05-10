<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    Public function search(Request $request){
        $query = $request['title'];
        return redirect()->route('search_results',['title' =>$query]);
    }
    Public function getSearchresults(Request $request){
        $query = $request['title'];
        $posts = Post::where('title','LIKE',"%$query%")->get();
        //dd($posts);
        return view ('search',compact('posts','query'));
    }
}
