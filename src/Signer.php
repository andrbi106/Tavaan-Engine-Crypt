<?php

declare(strict_types=1);

namespace Tavaan\Engine\Crypt;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * Signer — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Crypt\Contracts\SignerInterface
 */
final class Signer implements Contracts\SignerInterface
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
    public function sign(/* ... */): mixed
    {
        // TODO: پیاده‌سازی sign مطابق مستندات (سند §3 API).
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

    /**
     * {@inheritdoc}
     */
    public function generateKeyPair(/* ... */): mixed
    {
        // TODO: پیاده‌سازی generateKeyPair مطابق مستندات (سند §3 API).
        return null;
    }
}