<?php

namespace Fully\Repositories\Article;

use Fully\Repositories\RepositoryInterface;

/**
 * Interface ArticleInterface.
 *
 */
interface ArticleInterface extends RepositoryInterface
{
    /**
     * @param $slug
     *
     * @return mixed
     */
    public function getBySlug($slug);
}
