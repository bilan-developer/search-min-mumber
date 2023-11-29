<?php

declare(strict_types=1);

final class SearchMinNumber
{
    public const DEFAULT_VALUE = -1;

    /**
     * @param array $array
     */
    public function __construct(private array $array)
    {
    }

    /**
     * @param int $number
     *
     * @return int
     */
    public function firstCase(int $number): int
    {
        rsort($this->array);
        foreach ($this->array as $value) {
            if ($value < $number) {
                return $value;
            }
        }

        return self::DEFAULT_VALUE;
    }

    /**
     * @param int $number
     *
     * @return int
     */
    public function secondCase(int $number): int
    {
        $filteredArray = array_filter($this->array, function ($value) use ($number) {
            return $value < $number;
        });

        sort($filteredArray);

        if (empty($filteredArray)) {
            return self::DEFAULT_VALUE;
        }

        return end($filteredArray);
    }

    /* @param int $number
     *
     * @return int
     */
    public function thirdCase(int $number): int
    {
        $tempArray = $this->array;
        if (!count($tempArray)) {
            return self::DEFAULT_VALUE;
        }

        do {
            $max = max($tempArray);
            if ($max >= $number) {
                $key = array_search($max, $tempArray);
                unset($tempArray[$key]);
            } else {
                return $max;
            }

        } while (count($tempArray) > 0);

        return self::DEFAULT_VALUE;
    }

    /**
     * @param int $number
     *
     * @return int
     */
    public function fourthCase(int $number): int
    {
        $filteredArray = array_filter($this->array, function ($value) use ($number) {
            return $value < $number;
        });

        usort($filteredArray, function ($a, $b) {
            return $a - $b;
        });

        return $filteredArray ? end($filteredArray) : self::DEFAULT_VALUE;
    }
}