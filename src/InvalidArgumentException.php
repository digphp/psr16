<?php

declare(strict_types=1);

namespace DigPHP\Psr16;

use \Psr\SimpleCache\InvalidArgumentException as InvalidArgumentExceptionInterface;

class InvalidArgumentException extends CacheException implements InvalidArgumentExceptionInterface
{
}
