<?php

declare(strict_types=1);

namespace Tavaan\Engine\Crypt\Contracts;

/**
 * قرارداد BlindIndex.
 *
 * @see \Tavaan\Engine\Crypt\BlindIndex
 * @api 1.0
 */
interface BlindIndexInterface
{
    /**
     * متد compute.
     *
     * @return mixed
     */
    public function compute(/* ... */): mixed;

    /**
     * متد verify.
     *
     * @return mixed
     */
    public function verify(/* ... */): mixed;
}