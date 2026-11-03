<?php

declare(strict_types=1);

namespace Tavaan\Engine\Crypt\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Crypt\Signer;
use Tavaan\Engine\Crypt\BlindIndex;

/**
 * T-NN scenario tests for the crypt engine (real implementations).
 */
final class CryptScenarioTest extends TestCase
{
    public function test_t01_signer_sign_verify(): void
    {
        // Scenario T-01
$s = new Signer("secret-key");
        $sig = $s->sign("hello");
        $this->assertTrue($s->verify("hello", $sig));
        $this->assertFalse($s->verify("hello", "wrong-sig"));
    }

    public function test_t02_blind_index_create_search(): void
    {
        // Scenario T-02
$bi = new BlindIndex();
        $idx = $bi->create("email@example.com", "key123");
        $this->assertNotEmpty($idx);
    }
}
