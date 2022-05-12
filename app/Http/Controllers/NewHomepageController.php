<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class NewHomepageController extends Controller
{
    //
    public function homepage(){
      return view('pages.new-home.homepage');
    }
    public function aboutUs(){
      return view('pages.new-home.about-us');
    }
    public function partnerPage(){
      return view('pages.new-home.partner');
    }
    public function solusiPage(){
      return view('pages.new-home.solusi');
    }
    public function contactUsPage(){
      return view ('pages.new-home.contact-us');
    }
    public function blogPage(){
      $data['blogs'] = DB::table('blogs')
            ->select('blogs.blogTitle', 'blogs.blogSlug', 'blogs.blogContent', 'blogs.blogLike', 'blogs.blogRead', 'blogs.created_at', 'blogs.blogImage1', 'blogs.id', 'blogs.titleImage')
            ->orderBy('created_at', 'desc')
            ->paginate(9);
      $data['latest'] = DB::table('blogs')
          ->select('blogs.blogTitle', 'blogs.blogSlug', 'blogs.blogContent', 'blogs.blogLike', 'blogs.blogRead', 'blogs.created_at', 'blogs.blogImage1', 'blogs.id', 'blogs.titleImage')
          ->orderBy('created_at', 'desc')
          ->limit(6)->get();

      return view ('pages.new-home.blogs', $data);
    }
    public function blogDetailPage($slug){
      $data['blog'] = DB::table('blogs')
          ->where('blogSlug', $slug)->first();

      $data['blogs'] = DB::table('blogs')
          ->select('blogs.blogTitle', 'blogs.blogSlug', 'blogs.blogContent', 'blogs.blogLike', 'blogs.blogRead', 'blogs.created_at', 'blogs.blogImage1', 'blogs.id', 'blogs.titleImage')
          ->where('blogs.blogSlug', "!=", $slug)
          ->orderBy('blogs.created_at', 'desc')
          ->take(4)->get();

      return view ('pages.new-home.blog-detail', $data);
    }
}
