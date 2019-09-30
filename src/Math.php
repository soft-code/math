<?php declare(strict_types=1);

namespace Com\Math;

class Math
{
    public static function __callStatic(string $name, array $args) : MathInterface
    {
        $name = ucfirst($name);
        return new $name(...$args);
    }
}
