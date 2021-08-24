<?php

declare(strict_types=1);

class Product
{
    public function __construct(
        public string $name,
        public int $value,
        public int $cost
    )
    {
    }
}
