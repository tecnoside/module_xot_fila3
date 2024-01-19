<?php

namespace Tests\Unit\Modules\Xot\QueryFilters;

use Modules\Xot\QueryFilters\Status;
use Tests\TestCase;

/**
 * Class StatusTest.
 *
 * @covers \Modules\Xot\QueryFilters\Status
 */
final class StatusTest extends TestCase
{
    private Status $status;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->status = new Status();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->status);
    }

    public function testHandle(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
