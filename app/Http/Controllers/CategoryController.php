<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = $this->getCategory();
        return view('news.category', ['category' => $category]);
    }

    public function show(int $idCategory)
    {
        $news = $this->getNews();
        $category = $this->getCategory();
        return view('news.categoryNews', ['news' => $news, 'category' => $category]);
    }
}
