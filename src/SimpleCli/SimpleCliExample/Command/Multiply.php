<?php

declare(strict_types=1);

namespace SimpleCli\SimpleCliExample\Command;

use SimpleCli\Attribute\Rest;
use SimpleCli\CommandBase;
use SimpleCli\SimpleCli;

/**
 * Multiply arguments.
 */
class Multiply extends CommandBase
{
    /** @var float[] */
    #[Rest('The numbers to multiply')]
    public array $numbers = [];

    public function run(SimpleCli $cli): bool
    {
        $cli->write('= ' . array_reduce($this->numbers, static fn ($a, $b) => $a * $b, 1));

        return true;
    }
}
