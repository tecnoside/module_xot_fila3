<?php

namespace Tests\Unit\Modules\Xot\QueryFilters;

use Modules\Xot\QueryFilters\Search;
use Tests\TestCase;

/**
 * Class SearchTest.
 *
 * @covers \Modules\Xot\QueryFilters\Search
 */
final class SearchTest extends TestCase
{
    private Search $search;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->search = new Search();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->search);
    }

    public function testHandle(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
