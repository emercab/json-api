<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
  public function show(Article $article) {
    return ArticleResource::make( $article );
  }
}