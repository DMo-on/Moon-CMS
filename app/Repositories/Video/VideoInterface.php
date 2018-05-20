<?php

namespace Fully\Repositories\Video;

use Fully\Repositories\RepositoryInterface;

/**
 * Interface VideoInterface.
 *
 */
interface VideoInterface extends RepositoryInterface
{
    /**
     * @param $slug
     *
     * @return mixed
     */
    public function getBySlug($slug);
}
