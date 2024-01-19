<?php

namespace Modules\Xot\Tests\Unit\Database\Factories;

use Modules\Xot\Database\Factories\ProfileFactory;
use Tests\TestCase;

/**
 * Class ProfileFactoryTest.
 *
 * @covers \Modules\Xot\Database\Factories\ProfileFactory
 */
final class ProfileFactoryTest extends TestCase
{
    private ProfileFactory $profileFactory;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->profileFactory = new ProfileFactory();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->profileFactory);
    }

    public function testDefinition(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
