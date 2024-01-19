<?php

namespace Modules\Xot\Tests\Unit\Database\Seeders;

use Modules\Xot\Database\Seeders\XotDatabaseSeeder;
use Tests\TestCase;

/**
 * Class XotDatabaseSeederTest.
 *
 * @covers \Modules\Xot\Database\Seeders\XotDatabaseSeeder
 */
final class XotDatabaseSeederTest extends TestCase
{
    private XotDatabaseSeeder $xotDatabaseSeeder;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->xotDatabaseSeeder = new XotDatabaseSeeder();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->xotDatabaseSeeder);
    }

    public function testRun(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
