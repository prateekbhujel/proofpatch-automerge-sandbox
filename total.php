<?php

declare(strict_types=1);

function orderTotal(array $prices): int
{
    return array_sum($prices);
}
