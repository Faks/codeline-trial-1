<?php

declare(strict_types=1);

use App\Controllers\CurrenciesController;

require __DIR__ . '/vendor/autoload.php';

echo '<ul style="display: flex;
    list-style: none;">
                  <li>
                        <a style="padding-right: 15px;" href="https://bitbucket.org/Faks/codeline-trial-1/src/master/">Bitbucket</a>
                    </li>
                    <li>
                        <a style="padding-right: 15px;" href="https://www.linkedin.com/in/oskars-germovs-a94b3318a/">LinkedIn</a>
                    </li>
</ul><p></p>';

$currenciesController = new CurrenciesController();
echo $currenciesController->multiply('5', '2') . '<br>';
echo $currenciesController->division('5', '2') . '<br>';
echo $currenciesController->sum('5', '2') . '<br>';
echo $currenciesController->subtract('5', '2') . '<br>';
