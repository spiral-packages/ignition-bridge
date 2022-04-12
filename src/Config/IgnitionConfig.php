<?php

declare(strict_types=1);

namespace Spiral\Ignition\Config;

use Spiral\Core\InjectableConfig;

final class IgnitionConfig extends InjectableConfig
{
    public const CONFIG = 'ignition-bridge';
    protected $config = [];
}
