<?php

namespace Tests\Unit;

use CreateCacheLocksTable;
use Tests\TestCase;

/**
 * Class CreateCacheLocksTableTest.
 *
 * @covers \CreateCacheLocksTable
 */
final class CreateCacheLocksTableTest extends TestCase
{
    private CreateCacheLocksTable $createCacheLocksTable;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->createCacheLocksTable = new CreateCacheLocksTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createCacheLocksTable);
    }

    public function testUp(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
