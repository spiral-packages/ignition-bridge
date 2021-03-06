<?php

declare(strict_types=1);

namespace Spiral\Ignition;

use Spatie\Ignition\Ignition;
use Spiral\Boot\DirectoriesInterface;
use Spiral\Boot\Environment\DebugMode;
use Spiral\Exceptions\ExceptionRendererInterface;
use Spiral\Exceptions\Verbosity;

final class IgnitionRenderer implements ExceptionRendererInterface
{
    private Ignition $ignition;

    public function __construct(DirectoriesInterface $dirs, DebugMode $debugMode)
    {
        $this->ignition = Ignition::make()
            ->shouldDisplayException($debugMode->isEnabled())
            ->applicationPath($dirs->get('root'));
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
