<?php

namespace Tests\Unit\Modules\Xot\QueryFilters;

use Modules\Xot\QueryFilters\RoleFilter;
use Tests\TestCase;

/**
 * Class RoleFilterTest.
 *
 * @covers \Modules\Xot\QueryFilters\RoleFilter
 */
final class RoleFilterTest extends TestCase
{
    private RoleFilter $roleFilter;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->roleFilter = new RoleFilter();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->roleFilter);
    }

    public function testHandle(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
