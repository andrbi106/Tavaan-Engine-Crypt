<?php

declare(strict_types=1);

namespace Tavaan\Engine\Crypt\Contracts;

/**
 * قرارداد Encrypter.
 *
 * @see \Tavaan\Engine\Crypt\Encrypter
 * @api 1.0
 */
interface EncrypterInterface
{
    /**
     * متد encrypt.
     *
     * @return mixed
     */
    public function encrypt(/* ... */): mixed;

    /**
     * متد decrypt.
     *
     * @return mixed
     */
    public function decrypt(/* ... */): mixed;

    /**
     * متد encryptString.
     *
     * @return mixed
     */
    public function encryptString(/* ... */): mixed;

    /**
     * متد encryptJson.
     *
     * @return mixed
     */
    public function encryptJson(/* ... */): mixed;

    /**
     * متد decryptJson.
     *
     * @return mixed
     */
    public function decryptJson(/* ... */): mixed;

    /**
     * متد hmac.
     *
     * @return mixed
     */
    public function hmac(/* ... */): mixed;

    /**
     * متد deriveKey.
     *
     * @return mixed
     */
    public function deriveKey(/* ... */): mixed;
}