<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class DatabaseController extends Controller
{
    public function privateIndex(){
        $articles = Article::latest()->where('delete_flag', 0)->paginate(5);
        return view('database.index', compact('articles'));
    }
    public function newIndex(){
        $articles = Article::latest()->paginate(5);
        return view('database.new');
    }
    public function editIndex($article_id){
        $article = Article::find($article_id);
        return view('database.edit', compact('article'));
    }

}
