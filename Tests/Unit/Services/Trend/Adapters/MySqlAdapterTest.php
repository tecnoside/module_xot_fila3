<?php

namespace Modules\Xot\Services\Tests\Unit\Trend\Adapters;

use Modules\Xot\Services\Trend\Adapters\MySqlAdapter;
use Tests\TestCase;

/**
 * Class MySqlAdapterTest.
 *
 * @covers \Modules\Xot\Services\Trend\Adapters\MySqlAdapter
 */
final class MySqlAdapterTest extends TestCase
{
    private MySqlAdapter $mySqlAdapter;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->mySqlAdapter = new MySqlAdapter();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->mySqlAdapter);
    }

    public function testFormat(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
