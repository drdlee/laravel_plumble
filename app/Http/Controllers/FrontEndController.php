<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Setting;
use App\Tag;

class FrontEndController extends Controller
{
    public function index(){
      return view('welcome')
        ->with('title', Setting::first()->site_name)
        ->with('setting', Setting::first())
        ->with('categories', Category::take(5)->get())
        ->with('latestPost', Post::orderBy('created_at', 'desc')->first())
        ->with('latestPost2', Post::orderBy('created_at', 'desc')->skip(1)->take(2)->get())
        ->with('section1', Category::find(2))
        ->with('section1content', Category::find(2)->posts()->orderBy('created_at', 'desc')->take(3)->get())
        ->with('section2', Category::find(4))
        ->with('section2content', Category::find(4)->posts()->orderBy('created_at', 'desc')->take(3)->get());

    }

    public function singlePost($slug){
      $post = Post::where('slug', $slug)->first();
      $next_id = Post::where('id','>', $post->id)->min('id');
      $prev_id = Post::where('id', '<', $post->id)->max('id');

      return view('single')
        ->with('post', $post)
        ->with('title', $post->title)
        ->with('setting', Setting::first())
        ->with('categories', Category::take(5)->get())
        ->with('next', Post::find($next_id))
        ->with('prev', Post::find($prev_id))
        ->with('tags', Tag::all());
    }
}
