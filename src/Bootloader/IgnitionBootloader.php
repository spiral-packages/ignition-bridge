<?php

declare(strict_types=1);

namespace Spiral\Ignition\Bootloader;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Bootloader\ErrorHandlerBootloader;
use Spiral\Exceptions\ExceptionHandler;
use Spiral\Ignition\IgnitionRenderer;

class IgnitionBootloader extends Bootloader
{
    public const DEPENDENCIES = [
        ErrorHandlerBootloader::class,
    ];

    public function boot(ExceptionHandler $handler): void
    {
        $handler->addRenderer(new IgnitionRenderer());
    }
}
