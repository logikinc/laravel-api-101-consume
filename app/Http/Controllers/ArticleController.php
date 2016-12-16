<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Api\Articles;

class ArticleController extends Controller
{
    protected $articles;

    public function __construct(Articles $articles)
    {
        $this->articles = $articles;
    }

    public function index()
    {
        $articles = $this->articles->all();

        return view('articles.index')->with(compact('articles'));
    }

    public function show($id)
    {
        $article = $this->articles->get($id);

        return view('articles.show')->with(compact('article'));
    }
}
