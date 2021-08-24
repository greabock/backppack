<?php

function findBestCombinationValue(array $products, int $maxCost = 1000, int $currentCost = 0): int
{
    return max(0, ...array_map(function (Product $product, $key) use ($currentCost, $maxCost, $products) {
        if ($maxCost >= $product->cost) {
            $candidates = $products;

            unset($candidates[$key]);

            return $product->value + findBestCombinationValue(
                    $candidates,
                    $maxCost - $product->cost,
                    $currentCost + $product->cost
                );
        }

        return 0;

    }, $products, array_keys($products)));
}
