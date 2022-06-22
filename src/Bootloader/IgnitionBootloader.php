<?php

declare(strict_types=1);

namespace Spiral\Ignition\Bootloader;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Bootloader\Http\ErrorHandlerBootloader;
use Spiral\Exceptions\ExceptionHandler;
use Spiral\Ignition\IgnitionRenderer;

class IgnitionBootloader extends Bootloader
{
    public const DEPENDENCIES = [
        ErrorHandlerBootloader::class,
    ];

    public function boot(ExceptionHandler $handler, IgnitionRenderer $renderer): void
    {
        $handler->addRenderer($renderer);
    }
}
