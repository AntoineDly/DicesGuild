<?php

namespace App\Service\Article;

use App\Repository\Article\IArticleRepository;
use App\Service\Base\BaseService;

class ArticleSercice extends BaseService implements IArticleService
{
    /**
    * ArticleService constructor.
    *
    * @param IArticleRepository $articleRepository
    */
    public function __construct(IArticleRepository $articleRepository)
    {
        parent::__construct($articleRepository);
    }
    public function findAllArticle()
    {
        $this->repository->findAllArticle()->toArray();
    }
}