<?php
Route::get('/',function(){
    return view('welcome');
});

Route::get('/articles',function(){
    return view('articles.index',[
        'articles' => App\Article::latest()->get()
    ]);
});

Route::get('/articles','ArticlesController@index');
Route::get('articles/{article}','ArticlesController@store');
Route::get('articles/create','ArticlesController@create');
Route::get('/articles/{article}','ArticlesController@show');
