<?php

declare(strict_types=1);

namespace Spiral\Ignition;

use Spatie\Ignition\Ignition;
use Spiral\Exceptions\ErrorRendererInterface;
use Spiral\Exceptions\Verbosity;

final class IgnitionRenderer implements ErrorRendererInterface
{
    private Ignition $ignition;

    public function __construct()
    {
        $this->ignition = Ignition::make();
    }

    public function render(
        \Throwable $exception,
        ?Verbosity $verbosity = Verbosity::BASIC,
        string $format = null,
    ): string {
        \ob_start();
        $this->ignition->handleException($exception);
        return \ob_get_clean();
    }

    public function canRender(string $format): bool
    {
        return \in_array($format, ['html', 'application/html', 'text/html'], true);
    }
}
