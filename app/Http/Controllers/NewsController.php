<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = $this->getNews();
        $category = $this->getCategory();

        return view('news', ['news' => $news, 'category' => $category]);
    }

    public function show(int $idNews)
    {
        $article = $this->getArticle();
        $category = $this->getCategory();

        return view('article', ['article' => $article, 'category' => $category]);
    }

}
