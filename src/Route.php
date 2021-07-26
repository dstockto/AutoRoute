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

use Throwable;

/**
 * @property-read string $class
 * @property-read string $method
 * @property-read array $arguments
 * @property-read ?string $error
 * @property-read ?Throwable $exception
 * @property-read array $headers
 */
class Route
{
    public function __construct(
        protected string $class,
        protected string $method,
        protected array $arguments,
        protected ?string $error = null,
        protected ?Throwable $exception = null,
        protected array $headers = [],
    ) {
    }

    public function __get(string $key) : mixed
    {
        return $this->$key;
    }
}
