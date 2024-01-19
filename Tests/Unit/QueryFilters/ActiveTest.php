<?php

namespace Tests\Unit\Modules\Xot\QueryFilters;

use Modules\Xot\QueryFilters\Active;
use Tests\TestCase;

/**
 * Class ActiveTest.
 *
 * @covers \Modules\Xot\QueryFilters\Active
 */
final class ActiveTest extends TestCase
{
    private Active $active;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->active = new Active();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->active);
    }

    public function testHandle(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
