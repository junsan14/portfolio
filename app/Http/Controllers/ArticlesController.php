<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function articlesIndex($id){
        $articles = Article::latest()->where('delete_flag', 0)->paginate(5);
        return view('work.work'.$id.'.articles', compact('articles'));
    }

    public function articleIndex($id,$article_id){
        if(!ctype_digit($article_id)){
            return redirect('/home')->with('flash_message', __('Invalid operation was performed.'));
        }
        $article = Article::find($article_id);
        return view('work.work'.$id.'.article', ['article'=> $article]);
    }

    public function create(Request $request){
        $request->validate([
            'title'=>'required|string|max:255',
            'content'=> 'required|string'


        ]);
        $article = new Article;
        $article->title = $request->title;
        $img = $request->imgpath;
        $article->content = $request->content;
        
        $filename = $request->imgpath->getClientOriginalName();
        $img = $request->imgpath->storeAs('',$filename,'public');
        $article->img_path= $img;
        $article->save();
        return redirect('/private')->with('flash_message', __('投稿完了しました.'));
    }
    public function update(Request $request, $article_id){
        $request->validate([
            'title'=>'required|string|max:255',
            'content'=> 'required|string'
        ]);
        $article =Article::find($article_id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();

        return redirect('/private')->with('flash_message', __('編集完了しました.'));;
    }
    public function delete($article_id){
        $article =Article::find($article_id);
        $article->delete_flag = 1;
        $article->save();

        return redirect('/private')->with('flash_message', __('削除完了しました.'));;
    }


    
}
