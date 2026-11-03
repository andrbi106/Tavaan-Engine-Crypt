<?php

declare(strict_types=1);

namespace Tavaan\Engine\Crypt;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * BlindIndex — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Crypt\Contracts\BlindIndexInterface
 */
final class BlindIndex implements Contracts\BlindIndexInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function compute(/* ... */): mixed
    {
        // TODO: پیاده‌سازی compute مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function verify(/* ... */): mixed
    {
        // TODO: پیاده‌سازی verify مطابق مستندات (سند §3 API).
        return null;
    }
}