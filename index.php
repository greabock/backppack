<?php

include __DIR__ . '/Product.php';
include __DIR__ . '/helpers.php';

$day1Products = [
    new Product("Product 1", 3, 200),
    new Product("Product 2", 33, 100),
    new Product("Product 3", 100, 250),
    new Product("Product 4", 10, 500),
    new Product("Product 5", 90, 125),
];
$day2Products = [
    new Product("Product 1", 2, 1),
    new Product("Product 2", 1000, 1000),
];
$day3Products = [
    new Product("Product 1", 99, 1000),
    new Product("Product 2", 95, 100),
    new Product("Product 3", 85, 400),
    new Product("Product 4", 15, 500),
];


assert(findBestCombinationValue($day1Products) == 33 + 100 + 10 + 90);
assert(findBestCombinationValue($day2Products) == 1000);
assert(findBestCombinationValue($day3Products) == 95 + 85 + 15);
