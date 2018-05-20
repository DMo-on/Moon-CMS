<?php

namespace Fully\Repositories\Project;

use Fully\Repositories\RepositoryInterface;

/**
 * Interface ProjectInterface.
 *
 */
interface ProjectInterface extends RepositoryInterface
{
    /**
     * @param $slug
     *
     * @return mixed
     */
    public function getBySlug($slug);
}
