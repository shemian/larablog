<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\models\Blog;

class BlogController extends Controller
{
    //

    public function saveBlog(Request $request){
        Log::info($request);
        $newBlog = new Blog;
        $newBlog->title = $request->blogTitle;
        $newBlog->author = $request->blogAuthor;
        $newBlog->content = $request->blogContent;
        $newBlog->save();

        return redirect('/');
    }

    public function listBlog(){
        return view('welcome', ['listBlogs' =>Blog::all() ]);
    }
}
