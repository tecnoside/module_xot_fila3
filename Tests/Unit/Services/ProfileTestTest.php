<?php

namespace Tests\Unit\Modules\Xot\Services;

use Modules\Xot\Services\ProfileTest;
use Tests\TestCase;

/**
 * Class ProfileTestTest.
 *
 * @covers \Modules\Xot\Services\ProfileTest
 */
final class ProfileTestTest extends TestCase
{
    private ProfileTest $profileTest;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->profileTest = new ProfileTest();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->profileTest);
    }

    public function testHello(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testHasArea(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testIsSuperAdmin(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
