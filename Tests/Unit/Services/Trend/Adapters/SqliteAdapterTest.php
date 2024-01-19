<?php

namespace Modules\Xot\Services\Tests\Unit\Trend\Adapters;

use Modules\Xot\Services\Trend\Adapters\SqliteAdapter;
use Tests\TestCase;

/**
 * Class SqliteAdapterTest.
 *
 * @covers \Modules\Xot\Services\Trend\Adapters\SqliteAdapter
 */
final class SqliteAdapterTest extends TestCase
{
    private SqliteAdapter $sqliteAdapter;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->sqliteAdapter = new SqliteAdapter();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->sqliteAdapter);
    }

    public function testFormat(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
