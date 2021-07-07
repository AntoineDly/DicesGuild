<?php

namespace App\Http\Controllers;

use App\Service\Article\IArticleService;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
    public function __construct(IArticleService $articleService)     
    {         
        $this->service = $articleService;
    }

    public function index()
    {
        $articles = $this->service->findAllArticle();
        return Inertia::render('Article/Articles', ['articles' => $articles]);
    }

    public function create()
    {
        if(!Auth::user() OR !Gate::allows('admin-access', Auth::user()) ) {
            abort(403);
        }
        return Inertia::render('Article/CreateArticle');
    }

    public function store(Request $request)
    {
        if(!Auth::user() OR !Gate::allows('admin-access', Auth::user()) ) {
            abort(403);
        }

        $this->service->createArticle($request->all());
        return redirect()->route('accueil');
    }

    public function show($slug)
    {
        $article = $this->service->findArticle($slug);
        return Inertia::render('Article/Article', ['article' => $article]);
    }
}
