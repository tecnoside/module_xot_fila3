<?php

namespace Modules\Xot\Services\Tests\Unit\Trend\Adapters;

use Modules\Xot\Services\Trend\Adapters\PgsqlAdapter;
use Tests\TestCase;

/**
 * Class PgsqlAdapterTest.
 *
 * @covers \Modules\Xot\Services\Trend\Adapters\PgsqlAdapter
 */
final class PgsqlAdapterTest extends TestCase
{
    private PgsqlAdapter $pgsqlAdapter;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->pgsqlAdapter = new PgsqlAdapter();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->pgsqlAdapter);
    }

    public function testFormat(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
