<?php

namespace Modules\Xot\Tests\Unit\Tests\Feature;

use Modules\Xot\Tests\Feature\RouteDomTest;
use Tests\TestCase;

/**
 * Class RouteDomTestTest.
 *
 * @covers \Modules\Xot\Tests\Feature\RouteDomTest
 */
final class RouteDomTestTest extends TestCase
{
    private RouteDomTest $routeDomTest;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->routeDomTest = new RouteDomTest();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->routeDomTest);
    }

    public function testRoutes(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testCheckLinks(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
