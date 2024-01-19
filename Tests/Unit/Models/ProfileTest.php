<?php

namespace Tests\Unit\Modules\Xot\Models;

use Modules\Xot\Models\Profile;
use Tests\TestCase;

/**
 * Class ProfileTest.
 *
 * @covers \Modules\Xot\Models\Profile
 */
final class ProfileTest extends TestCase
{
    private Profile $profile;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->profile = new Profile();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->profile);
    }

    public function testUser(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
