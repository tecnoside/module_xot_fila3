<?php

namespace Tests\Unit\Modules\Xot\QueryFilters;

use Modules\Xot\QueryFilters\Sort;
use Tests\TestCase;

/**
 * Class SortTest.
 *
 * @covers \Modules\Xot\QueryFilters\Sort
 */
final class SortTest extends TestCase
{
    private Sort $sort;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->sort = new Sort();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->sort);
    }

    public function testHandle(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
