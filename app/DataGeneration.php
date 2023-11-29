<?php

declare(strict_types=1);

class DataGeneration
{
    /**
     * @param int $size
     * @param int $min
     * @param int $max
     *
     * @return array
     */
    public static function generateRandomArray(int $size = 10, int $min = 1, int $max = 100): array
    {
        $randomArray = [];

        for ($i = 0; $i < $size; $i++) {
            $randomArray[] = rand($min, $max);
        }

        return $randomArray;
    }

    /**
     * @param int $min
     * @param int $max
     *
     * @return int
     */
    public static function generateRandomNumber(int $min = 1, int $max = 100): int
    {
        return rand($min, $max);
    }
}