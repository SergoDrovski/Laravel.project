<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = $this->getNews();
        $category = $this->getCategory();
        $chunkCategories = collect($category)->chunk(4);
        $bestCategories = $chunkCategories[0];
        return view('news.index', ['news' => $news, 'category' => $bestCategories]);

    }

    public function show(int $idNews)
    {
        $article = $this->getArticle();
        $category = $this->getCategory();

        return view('news.article', ['article' => $article, 'category' => $category]);
    }

}
