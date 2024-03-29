<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleCollection;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
  public function index(): ArticleCollection{
    $articles = Article::all();
    return ArticleCollection::make( $articles );
  }
  
  public function show(Article $article): ArticleResource {
    return ArticleResource::make( $article );
  }
}
