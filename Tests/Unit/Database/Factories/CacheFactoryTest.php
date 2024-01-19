<?php

namespace Modules\Xot\Tests\Unit\Database\Factories;

use Modules\Xot\Database\Factories\CacheFactory;
use Tests\TestCase;

/**
 * Class CacheFactoryTest.
 *
 * @covers \Modules\Xot\Database\Factories\CacheFactory
 */
final class CacheFactoryTest extends TestCase
{
    private CacheFactory $cacheFactory;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->cacheFactory = new CacheFactory();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->cacheFactory);
    }

    public function testDefinition(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
