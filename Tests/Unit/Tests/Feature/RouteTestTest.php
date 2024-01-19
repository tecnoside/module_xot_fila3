<?php

namespace Modules\Xot\Tests\Unit\Tests\Feature;

use Modules\Xot\Tests\Feature\RouteTest;
use Tests\TestCase;

/**
 * Class RouteTestTest.
 *
 * @covers \Modules\Xot\Tests\Feature\RouteTest
 */
final class RouteTestTest extends TestCase
{
    private RouteTest $routeTest;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->routeTest = new RouteTest();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->routeTest);
    }

    public function testRoutes(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
