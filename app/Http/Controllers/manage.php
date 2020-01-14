<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;

use Illuminate\Support\facades\Auth;

class manage extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddArticle(Request $request){
        if($request->isMethod('post')){
            $article=new Article();
            
            $article->title = $request->input('title');
            $article->body = $request->input('body');
            
            $article->user_id = Auth::User()->id;
            $article->save();
            return redirect('/view');
        }
        return view('manage.AddArticle');
    }
    public function view(){
        $articles=Article::all();
        $ar=Array('articles'=>$articles);

        return view('manage.view',$ar);
    }
    public function read(Request $request, $id){

        if($request->isMethod('post')){
            $ar=new Comment();
            $ar->comment = $request->input('body');
            $ar->article_id = $id;
            $ar->save();
            // return redirect('/view');
        }
        
        $article=Article::find($id);
        $ar=Array('article'=>$article);
        
        return view('manage.read',$ar);
    }
}
