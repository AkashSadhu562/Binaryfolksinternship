<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ArticlesControllers extends Controller
{
    public function index()
    {
        //Render a list of resource
        $articles = Article::latest()->get();
    return view('articles.index',[articles => $articles]);
    }
    public function show($id)
    {
        //Shows a single resource.
        $articles = Article::find($id);
        return view('articles.show',[articles => $articles]);
    }
    public function create()
    {
        return view(create.articles);
    }
    public function store()
    {
        die('hello');
    }
}