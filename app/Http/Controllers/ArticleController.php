<?php

namespace App\Http\Controllers;

use App\Lib\Slug;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Article;
class ArticleController extends Controller
{
    private Article $article ;
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View
    {
        $articles = $this->article->getForArticlesView();
        return \view('pages.articles',compact('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id , string $slug):View
    {
        $articleItem = $this->article->getForArticleView($id,$slug);
        if (is_null($articleItem))
            abort(404,'article not found !!!');
        return \view('pages.article' ,compact('articleItem'));
    }


}
