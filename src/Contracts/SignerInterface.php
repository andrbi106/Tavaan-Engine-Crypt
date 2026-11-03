<?php

declare(strict_types=1);

namespace Tavaan\Engine\Crypt\Contracts;

/**
 * قرارداد Signer.
 *
 * @see \Tavaan\Engine\Crypt\Signer
 * @api 1.0
 */
interface SignerInterface
{
    /**
     * متد sign.
     *
     * @return mixed
     */
    public function sign(/* ... */): mixed;

    /**
     * متد verify.
     *
     * @return mixed
     */
    public function verify(/* ... */): mixed;

    /**
     * متد generateKeyPair.
     *
     * @return mixed
     */
    public function generateKeyPair(/* ... */): mixed;
}