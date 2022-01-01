<?php

declare(strict_types=1);

namespace SimpleCli\SimpleCliExample;

use SimpleCli\Command\SelfUpdate;
use SimpleCli\SimpleCli;
use SimpleCli\SimpleCliExample\Command\Add;
use SimpleCli\SimpleCliExample\Command\Multiply;

class EasyCalc extends SimpleCli
{
    /**
     * Package name used in composer.json (and so in packagist if applicable).
     */
    public function getPackageName(): string
    {
        return 'simple-cli/simple-cli-example';
    }

    /**
     * Repository should be set if different from package name.
     */
    public function getRepository(): string
    {
        return 'kylekatarnls/simple-cli-example';
    }

    public function getCommands() : array
    {
        return [
            Add::class,
            Multiply::class,
            SelfUpdate::class,
        ];
    }

    public function getCommandAliases(): array
    {
        return [
            'plus'    => 'add',
            'sum'     => 'add',
            'times'   => 'multiply',
            'product' => 'multiply',
        ];
    }
}
