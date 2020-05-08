<?php

declare(strict_types=1);

namespace Otis22\PhpSkelleton\Arr;

class ArrayMerged extends SimpleArray
{
    /**
     * ArrayMerged constructor.
     * @param iterable<mixed> $data1
     * @param iterable<mixed> $data2
     */
    public function __construct(iterable $data1, iterable $data2)
    {
        parent::__construct(array_merge((array) $data1, (array) $data2));
    }
}
