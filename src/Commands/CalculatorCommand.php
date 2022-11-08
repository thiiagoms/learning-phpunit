<?php

declare(strict_types=1);

namespace Src\Commands;

use Src\Services\CalculatorService;

/**
 * Calculator command
 *
 * @package Src\Commands
 * @author  Thiago Silva <thiagom.devsec@gmail.com>
 * @version 1.0
 */
class CalculatorCommand
{
    /**
     * Calculator service
     *
     * @var CalculatorService
     */
    private CalculatorService $calculatorService;

    /**
     * Init Calculator Command
     *
     * @param float $n1
     * @param float $n2
     */
    public function __construct(private float $n1, private float $n2)
    {
        $this->calculatorService = new CalculatorService();
    }

    /**
     * Plus numbers
     *
     * @return float
     */
    public function add(): float
    {
        return $this->calculatorService->add($this->n1, $this->n2);
    }

    /**
     * Minus numbers
     *
     * @return float
     */
    public function less(): float
    {
        return $this->calculatorService->minus($this->n1, $this->n2);
    }

    /**
     * Multiplicate numbers
     *
     * @return float
     */
    public function multi(): float
    {
        return $this->calculatorService->mult($this->n1, $this->n2);
    }

    /**
     * Divide numbers
     *
     * @return float
     */
    public function divide(): float
    {
        return $this->calculatorService->slice($this->n1, $this->n2);
    }
}
