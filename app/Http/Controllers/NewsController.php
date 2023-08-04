<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(Request $request){
    $data_news = \App\Models\News::all();
    return view('news.index',['data_news' => $data_news]);
    }

    public function create(Request $request){
    \App\Models\News::create($request->all());
    return redirect('/news');
    }

    public function edit($id){
    $news = \App\Models\News::find($id);
    return view('news/edit',['news' => $news]);
    }

    public function update(Request $request,$id){
    $news = \App\Models\News::find($id);
    $news-> update($request->all());
    return redirect('/news');
    }

    public function delete($id){
    $news = \App\Models\News::find($id);
    $news-> delete($news);
    return redirect('/news');
    }



}
