<?php

namespace App\Repository\Article;

use App\Models\Article;
use App\Repository\Base\BaseRepository;

class ArticleRepository extends BaseRepository implements IArticleRepository
{
    /**
    * ArticleRepository constructor.
    *
    * @param Article $article
    */
    public function __construct(Article $article)
    {
        parent::__construct($article);
    }

    public function findAllArticle()
    {
        $this->model->section->user->all();
    }

    public function findArticle($id)
    {
        $this->model->section->user->find($id);
    }
}