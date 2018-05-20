<?php

namespace Fully\Repositories\News;

use Fully\Repositories\RepositoryInterface;

/**
 * Interface NewsInterface.
 *
 */
interface NewsInterface extends RepositoryInterface
{
    /**
     * @param $slug
     *
     * @return mixed
     */
    public function getBySlug($slug);
}
