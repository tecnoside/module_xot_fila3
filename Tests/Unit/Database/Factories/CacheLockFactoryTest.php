<?php

namespace Modules\Xot\Tests\Unit\Database\Factories;

use Modules\Xot\Database\Factories\CacheLockFactory;
use Tests\TestCase;

/**
 * Class CacheLockFactoryTest.
 *
 * @covers \Modules\Xot\Database\Factories\CacheLockFactory
 */
final class CacheLockFactoryTest extends TestCase
{
    private CacheLockFactory $cacheLockFactory;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->cacheLockFactory = new CacheLockFactory();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->cacheLockFactory);
    }

    public function testDefinition(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
