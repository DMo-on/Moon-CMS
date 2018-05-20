<?php

namespace Fully\Interfaces;

/**
 * Class ModelInterface.
 *
 */
interface ModelInterface
{
    /**
     * @param $value
     *
     * @return mixed
     */
    public function setUrlAttribute($value);

    /**
     * @return mixed
     */
    public function getUrlAttribute();
}
