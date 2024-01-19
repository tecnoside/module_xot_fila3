<?php

namespace Modules\Xot\Tests\Unit\Database\Factories;

use Modules\Xot\Database\Factories\FeedFactory;
use Tests\TestCase;

/**
 * Class FeedFactoryTest.
 *
 * @covers \Modules\Xot\Database\Factories\FeedFactory
 */
final class FeedFactoryTest extends TestCase
{
    private FeedFactory $feedFactory;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->feedFactory = new FeedFactory();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->feedFactory);
    }

    public function testDefinition(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
