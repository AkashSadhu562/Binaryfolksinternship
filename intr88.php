<?php

Route::get('/articles','ArticlesController@index');
Route::get('/articles/{article}','ArticlesController@show');


// GET/articles
// GET/articles/:id
// POST/articles
// PUT/articles/:id/


// GET/videos
// GET/videos/create
// POST/videos
// GET/videos
// GET/videos/edit
// PUT/videos/2
// DELETE/videos/2

//GET/videos/subscribe
//POST/videos/Subscriptions => videosubscriptioncontroller@show();
