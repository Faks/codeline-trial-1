<?php

declare(strict_types=1);

namespace App\Controllers;

use function bcadd;
use function bcdiv;
use function bcmul;
use function bcsub;

class CurrenciesController
{
    private int $scaleFormat;

    public function __construct(int $scale = 2)
    {
        $this->scaleFormat = $scale;
    }

    final public function multiply(string $leftOperand = '0', string $rightOperand = '0'): ?string
    {
        return bcmul($leftOperand, $rightOperand, $this->scaleFormat);
    }

    final public function division(string $leftOperand = '0', string $rightOperand = '0'): ?string
    {
        return bcdiv($leftOperand, $rightOperand, $this->scaleFormat);
    }

    final public function sum(string $leftOperand = '0', string $rightOperand = '0'): ?string
    {
        return bcadd($leftOperand, $rightOperand, $this->scaleFormat);
    }

    final public function subtract(string $leftOperand = '0', string $rightOperand = '0'): ?string
    {
        return bcsub($leftOperand, $rightOperand, $this->scaleFormat);
    }
}