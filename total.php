<?php

declare(strict_types=1);

function orderTotal(array $prices): int
{
    return array_sum($prices);
}

/** Format cents as a dollar amount. */
function formatTotal(int $cents): string
{
    return sprintf('$%.2f', $cents / 100);
}
