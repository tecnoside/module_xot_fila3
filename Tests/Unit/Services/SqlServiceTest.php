<?php

namespace Tests\Unit\Modules\Xot\Services;

use Modules\Xot\Services\SqlService;
use Tests\TestCase;

/**
 * Class SqlServiceTest.
 *
 * @covers \Modules\Xot\Services\SqlService
 */
final class SqlServiceTest extends TestCase
{
    private SqlService $sqlService;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->sqlService = new SqlService();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->sqlService);
    }

    public function testGetCoalesceDateRange(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
