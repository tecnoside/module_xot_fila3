<?php

namespace Tests\Unit\Modules\Xot\Services;

use Modules\Xot\Services\NavService;
use Tests\TestCase;

/**
 * Class NavServiceTest.
 *
 * @covers \Modules\Xot\Services\NavService
 */
final class NavServiceTest extends TestCase
{
    private NavService $navService;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->navService = new NavService();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->navService);
    }

    public function testYearNav(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testMonthYearNav(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
