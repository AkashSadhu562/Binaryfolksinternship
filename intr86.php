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
        //Shows a view to create a new resource.
    }
    public function store()
    {
        //Persist the new resource
    }
    public function edit()
    {
        //Show a view to edit an existing resource
    }
    public function update()
    {
        //Persist the edited resource
    }
    public function destroy()
    {
        //Delete the resource
    }
}
