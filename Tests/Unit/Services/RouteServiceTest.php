<?php

namespace Tests\Unit\Modules\Xot\Services;

use Modules\Xot\Services\RouteService;
use Tests\TestCase;

/**
 * Class RouteServiceTest.
 *
 * @covers \Modules\Xot\Services\RouteService
 */
final class RouteServiceTest extends TestCase
{
    private RouteService $routeService;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->routeService = new RouteService();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->routeService);
    }

    public function testInAdmin(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testUrlAct(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetRoutenameN(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testUrlLang(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetAct(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetModuleName(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetControllerName(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetView(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
