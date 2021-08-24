<?php

function findBestCombinationValue(array $products, int $maxCost = 1000, int $currentCost = 0): int
{
    if ($maxCost < $currentCost) {
        return 0;
    }

    return max(0, ...array_map(function (Product $product, $key) use ($currentCost, $maxCost, $products) {
        $candidates = $products;

        unset($candidates[$key]);

        $product->value + findBestCombinationValue(
            $candidates,
            $maxCost - $product->value,
            $currentCost + $product->cost
        );

    }, $products, array_keys($products)));
}
