<?php

declare(strict_types=1);

namespace Otis22\PhpSkelleton\Tests;

use Otis22\PhpSkelleton\Arr\SimpleArray;
use Otis22\PhpSkelleton\Arr\ArraySorted;
use Otis22\PhpSkelleton\Arr\ArrayMerged;
use PHP_CodeSniffer\Standards\Generic\Sniffs\VersionControl\SubversionPropertiesSniff;
use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{

    public function testSimple(): void
    {
        $array = new SimpleArray([1, 2, 3]);
        $result = $array->toArray();
        $this->assertEquals($result, [1, 2, 3]);
    }

    public function testSorted(): void
    {
        $array = new ArraySorted([3, 2, 1]);
        $result = array_values($array->toArray());
        $this->assertEquals($result, [1, 2, 3]);
    }

    public function testMerged(): void
    {
        $array1 = new SimpleArray([3, 2, 1]);
        $array2 = new SimpleArray([4, 5, 6]);
        $mergedArray = new ArrayMerged($array1, $array2);
        $result = array_values($mergedArray->toArray());
        $this->assertEquals($result, [3, 2, 1, 4, 5, 6]);
    }

    public function testMixed(): void
    {
        $array1 = new SimpleArray([4, 5, 6]);
        $array2 = new SimpleArray([3, 2, 1]);
        $mergedArray = new ArrayMerged($array1, $array2);
        $sortedArray = new ArraySorted($mergedArray);
        $result = array_values($sortedArray->toArray());
        $this->assertEquals($result, [1, 2, 3, 4, 5, 6]);
    }
}
