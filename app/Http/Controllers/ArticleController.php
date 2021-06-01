<?php

namespace App\Http\Controllers;

use App\Service\Article\IArticleService;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**      
     * @var Service      
     */     
    protected $service;       

    /**      
     * ArticleController constructor.      
     *      
     * @param IArticleService $articeService      
     */     
    public function __construct(IArticleService $articeService)     
    {         
        $this->service = $articeService;
    }
    public function create()
    {
        return Inertia::render('Article/CreateArticle');
    }

    public function store(Request $request)
    {
        $this->service->createArticle($request->all());
        return Inertia::render('Dashboard');
    }
}
