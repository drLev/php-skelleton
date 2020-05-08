<?php

declare(strict_types=1);

namespace Otis22\PhpSkelleton\Arr;

/**
 * Class ArraySorted
 * @package Otis22\PhpSkelleton\Arr
 */
class ArraySorted extends SimpleArray
{
    /**
     * ArraySorted constructor.
     * @param iterable<mixed> $data
     */
    public function __construct(iterable $data)
    {
        $data = (array) $data;
        asort($data);
        parent::__construct($data);
    }
}
