<?php

namespace App\Service\Article;

use App\Models\Article;
use App\Repository\Article\IArticleRepository;
use App\Service\Base\BaseService;
use Illuminate\Http\UploadedFile;
use Validator;

class ArticleService extends BaseService implements IArticleService
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

    public function createArticle(array $attributes)
    {

        Validator::make($attributes, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'keywords' => ['required', 'string', 'max:255'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'text' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('createArticle');

        // TEMPORAIRE
        $attributes['user_id'] = 1;
        $attributes['section_id'] = 1;

        $article = $this->repository->create($attributes);

        if ($attributes['photo'] != '') {
            $this->addArticlePhoto($attributes['photo'], $article);
        }
        if ($attributes['text'] != '') {
            $this->addArticleText($attributes['text'], $article);
        }

    }

    private function addArticlePhoto(UploadedFile $photo, Article $article)
    {
        $article->forceFill([
            'article_photo_path' => $photo->storePublicly(
                'article-photos', ['disk' => $this->disk()]
            ),
        ])->save();
    }

    private function addArticleText(UploadedFile $text, Article $article)
    {
        $article->forceFill([
            'article_text_path' => $text->storePublicly(
                'article-texts', ['disk' => $this->disk()]
            ),
        ])->save();
    }

    private function disk()
    {
        return isset($_ENV['VAPOR_ARTIFACT_NAME']) ? 's3' : config('jetstream.profile_photo_disk', 'public');
    }
}