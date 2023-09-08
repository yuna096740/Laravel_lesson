<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', 
        ['blogs' => $blogs]);
    }

    public function create()
    {
        return view('Blog.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        return redirect('/');
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('Blog.show', ['blog' => $blog]);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/');
    }

}
