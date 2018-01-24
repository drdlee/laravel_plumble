<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Setting;

class FrontEndController extends Controller
{
    public function index(){
      return view('welcome')
        ->with('setting', Setting::first())
        ->with('categories', Category::take(5)->get())
        ->with('latestPost', Post::orderBy('created_at', 'desc')->first())
        ->with('latestPost2', Post::orderBy('created_at', 'desc')->skip(1)->take(2)->get())
        ->with('section1', Category::find(2))
        ->with('section1content', Category::find(2)->posts()->orderBy('created_at', 'desc')->take(3)->get())
        ->with('section2', Category::find(4))
        ->with('section2content', Category::find(4)->posts()->orderBy('created_at', 'desc')->take(3)->get());

    }
}
