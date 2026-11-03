<?php

declare(strict_types=1);

namespace Tavaan\Engine\Crypt\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * key:rotate command.
 */
final class KeyRotateCommand implements CommandInterface
{
    public function name(): string
    {
        return 'key:rotate';
    }

    public function description(): string
    {
        return 'Run key:rotate (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
