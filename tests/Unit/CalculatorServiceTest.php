<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Src\Services\CalculatorService;

/**
 * Calculator Service Command Test
 * 
 * @package Tests\Unit
 * @author  Thiago Silva <thiagom.devsec@gmail.com>
 * @version 1.0
 */
class CalculatorServiceTest extends TestCase
{

    /**
     * Calculator Services
     *
     * @var CalculatorService
     */
    private CalculatorService $calculatorService;

    /**
     * Init setups
     *
     * @return void
     */
    public function setUp(): void
    {
        $this->calculatorService = new CalculatorService();
    }

    /**
     * Test add function that plus two numbers
     * 
     * @covers \Src\Services\CalculatorService::add
     * @return void
     */
    public function test_add_function_should_receive_two_numbers(): void
    {
        $result = $this->calculatorService->add(2, 2);

        $this->assertEquals(4, $result);
    }

    /**
     * Test minus function that minus two numbers
     *
     * @covers \Src\Services\CalculatorService::minus
     * @return void
     */
    public function test_minus_function_should_receive_two_numbers(): void
    {
        $result = $this->calculatorService->minus(2, 1);
        $this->assertEquals(1, $result);
    }

    /**
     * Test minus function that minus two numbers
     *
     * @covers \Src\Services\CalculatorService::multi
     * @return void
     */
    public function test_multi_function_should_receive_two_numbers(): void
    {
        $result = $this->calculatorService->mult(2, 1);
        $this->assertEquals(2, $result);
    }

    /**
     * Test minus function that minus two numbers
     *
     * @covers \Src\Services\CalculatorService::slice
     * @return void
     */
    public function test_slice_function_should_receive_two_numbers(): void
    {
        $result = $this->calculatorService->slice(2, 1);
        $this->assertEquals(2, $result);
    }
}
