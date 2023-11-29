<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SearchMinNumberTest extends TestCase
{
    /**
     * @return void
     */
    public function testEmptyArray(): void
    {
        $array = [];
        $number = DataGeneration::generateRandomNumber();
        $searchMinNumber = new SearchMinNumber($array);

        $this->assertSame(SearchMinNumber::DEFAULT_VALUE, $searchMinNumber->firstCase($number));
        $this->assertSame(SearchMinNumber::DEFAULT_VALUE, $searchMinNumber->secondCase($number));
        $this->assertSame(SearchMinNumber::DEFAULT_VALUE, $searchMinNumber->thirdCase($number));
        $this->assertSame(SearchMinNumber::DEFAULT_VALUE, $searchMinNumber->fourthCase($number));
    }

    /**
     * @return void
     */
    public function testSameResult(): void
    {
        $array = DataGeneration::generateRandomArray();
        $number = DataGeneration::generateRandomNumber();
        $searchMinNumber = new SearchMinNumber($array);

        $this->assertSame($searchMinNumber->firstCase($number), $searchMinNumber->secondCase($number));
        $this->assertSame($searchMinNumber->secondCase($number), $searchMinNumber->thirdCase($number));
        $this->assertSame($searchMinNumber->thirdCase($number), $searchMinNumber->fourthCase($number));
        $this->assertSame($searchMinNumber->fourthCase($number), $searchMinNumber->firstCase($number));
    }

    /**
     * @return void
     */
    public function testRandomArray(): void
    {
        $array = DataGeneration::generateRandomArray();
        $searchMinNumber = new SearchMinNumber($array);
        $max = max($array);
        $number = $max + DataGeneration::generateRandomNumber();

        $this->assertSame($max, $searchMinNumber->firstCase($number));
        $this->assertSame($max, $searchMinNumber->secondCase($number));
        $this->assertSame($max, $searchMinNumber->thirdCase($number));
        $this->assertSame($max, $searchMinNumber->fourthCase($number));
    }

    /**
     * @return void
     */
    public function testDefaultValue(): void
    {
        $array = DataGeneration::generateRandomArray();
        $searchMinNumber = new SearchMinNumber($array);
        $max = min($array);
        $number = $max - DataGeneration::generateRandomNumber();

        $this->assertSame(SearchMinNumber::DEFAULT_VALUE, $searchMinNumber->firstCase($number));
        $this->assertSame(SearchMinNumber::DEFAULT_VALUE, $searchMinNumber->secondCase($number));
        $this->assertSame(SearchMinNumber::DEFAULT_VALUE, $searchMinNumber->thirdCase($number));
        $this->assertSame(SearchMinNumber::DEFAULT_VALUE, $searchMinNumber->fourthCase($number));
    }
}

