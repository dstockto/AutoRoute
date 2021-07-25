<?php
/**
 *
 * This file is part of AutoRoute for PHP.
 *
 * @license http://opensource.org/licenses/MIT MIT
 *
 */
declare(strict_types=1);

namespace AutoRoute;

/**
 * @property-read string $class
 * @property-read string $method
 * @property-read array $arguments
 */
class Route
{
    public function __construct(
        protected string $class,
        protected string $method,
        protected array $arguments,
    ) {
    }

    public function __get(string $key) : mixed
    {
        return $this->$key;
    }
}
