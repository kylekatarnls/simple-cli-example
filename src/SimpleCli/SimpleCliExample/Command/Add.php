<?php

declare(strict_types=1);

namespace SimpleCli\SimpleCliExample\Command;

use SimpleCli\Attribute\Rest;
use SimpleCli\CommandBase;
use SimpleCli\SimpleCli;

/**
 * Sum arguments.
 */
class Add extends CommandBase
{
    /** @var float[] */
    #[Rest('The numbers to sum')]
    public array $numbers = [];

    public function run(SimpleCli $cli): bool
    {
        $cli->write('= ' . array_sum($this->numbers));

        return true;
    }
}
