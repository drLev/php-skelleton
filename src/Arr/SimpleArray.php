<?php

declare(strict_types=1);

namespace Otis22\PhpSkelleton\Arr;

/**
 * Class SimpleArray
 * @package Otis22\PhpSkelleton\Arr
 */
class SimpleArray extends \ArrayIterator
{
    /**
     * SimpleArray constructor.
     * @param iterable<mixed> $data
     */
    public function __construct(iterable $data)
    {
        parent::__construct((array)$data, 0);
    }

    /**
     * @return array<mixed>
     */
    public function toArray(): array
    {
        return (array) $this;
    }
}
