<?php

namespace kk;

trait TSingleton
{
    private static self|null $instance = null;

    private function __construct()
    {}

    public static function getInstance(): static
    {
        return static::$instance !== null ? static::$instance : static::$instance = new static();
    }
}