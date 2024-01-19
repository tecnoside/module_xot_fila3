<?php

namespace Tests\Unit;

use CreateSessionsTable;
use Tests\TestCase;

/**
 * Class CreateSessionsTableTest.
 *
 * @covers \CreateSessionsTable
 */
final class CreateSessionsTableTest extends TestCase
{
    private CreateSessionsTable $createSessionsTable;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->createSessionsTable = new CreateSessionsTable();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->createSessionsTable);
    }

    public function testUp(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
