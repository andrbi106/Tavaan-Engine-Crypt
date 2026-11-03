<?php

declare(strict_types=1);

namespace Tavaan\Engine\Crypt\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * key:generate command.
 */
final class Key_generateCommand implements CommandInterface
{
    public function name(): string
    {
        return 'key:generate';
    }

    public function description(): string
    {
        return 'Run key:generate (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
