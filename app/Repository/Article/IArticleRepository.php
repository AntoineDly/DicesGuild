<?php

namespace App\Repository\Article;

use App\Repository\Base\IBaseRepository;

interface IArticleRepository extends IBaseRepository
{
    public function findAllArticle();

    public function findArticle($id);
}