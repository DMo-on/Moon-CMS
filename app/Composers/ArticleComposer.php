<?php

namespace Fully\Composers;

use Article;
use Fully\Repositories\Article\ArticleInterface;


class ArticleComposer
{
    /**
     * @var \Fully\Repositories\Article\ArticleInterface
     */
    protected $article;

    /**
     * @param ArticleInterface $article
     */
    public function __construct(ArticleInterface $article)
    {
        $this->article = $article;
    }

    /**
     * @param $view
     */
    public function compose($view)
    {
        $articles = $this->article->getLastArticle(3);
        $view->with('articles', $articles);
    }
}
