<?php

namespace App\Service\Article;

use App\Service\Base\IBaseService;

interface IArticleService extends IBaseService
{
    public function findAllArticle();

    public function findArticle($id);

    public function createArticle(array $attributes);
}