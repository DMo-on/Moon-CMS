<?php

namespace Fully\Repositories\Page;

use Fully\Repositories\RepositoryInterface;

/**
 * Interface PageInterface.
 *
 */
interface PageInterface extends RepositoryInterface
{
    /**
     * @param $slug
     *
     * @return mixed
     */
    public function getBySlug($slug, $isPublished = false);
}
