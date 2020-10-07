<?php

declare(strict_types=1);

namespace Tests;

use App\Controllers\CurrenciesController;
use PHPUnit\Framework\TestCase;

final class CurrenciesControllerTest extends TestCase
{
    /** @test */
    final public function multiply(): void
    {
        $currenciesController = new CurrenciesController();

        self::assertSame('10.00', $currenciesController->multiply('5', '2'));
    }

    /** @test */
    final public function division()
    {
        $currenciesController = new CurrenciesController();

        self::assertSame('2.50', $currenciesController->division('5', '2'));
    }

    /** @test */
    final public function sum()
    {
        $currenciesController = new CurrenciesController();

        self::assertSame('7.00', $currenciesController->sum('5', '2'));
    }


    /** @test */
    final public function subtract()
    {
        $currenciesController = new CurrenciesController();

        self::assertSame('3.00', $currenciesController->subtract('5', '2'));
    }
}
