<?php

namespace Tests\Unit;

use CreateCacheTable;
use Tests\TestCase;

/**
 * Class CreateCacheTableTest.
 *
 * @covers \CreateCacheTable
 */
final class CreateCacheTableTest extends TestCase
{
    private CreateCacheTable $createCacheTable;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->createCacheTable = new CreateCacheTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createCacheTable);
    }

    public function testUp(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
