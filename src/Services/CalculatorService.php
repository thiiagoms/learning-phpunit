<?php

declare(strict_types=1);

namespace Src\Services;

/**
 * Calculator Service
 *
 * @package Src\Services
 * @author  Thiago Silva <thiagom.devsec@gmail.com>
 * @version 1.0
 */
class CalculatorService
{
    /**
     * Plus number one with number two
     *
     * @param float $n1
     * @param float $n2
     * @return float
     */
    public function add(float $n1, float $n2): float
    {
        return $n1 + $n2;
    }

    /**
     * Minus number one with number two
     *
     * @param float $n1
     * @param float $n2
     * @return float
     */
    public function minus(float $n1, float $n2): float
    {
        return $n1 - $n2;
    }

    /**
     * Mult number one against number two
     *
     * @param float $n1
     * @param float $n2
     * @return float
     */
    public function mult(float $n1, float $n2): float
    {
        return $n1 * $n2;
    }

    /**
     * Divide number one by number two
     *
     * @param float $n1
     * @param float $n2
     * @return float
     */
    public function slice(float $n1, float $n2): float
    {
        return $n1 / $n2;
    }
}
