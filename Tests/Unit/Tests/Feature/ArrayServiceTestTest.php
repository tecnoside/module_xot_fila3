<?php

namespace Modules\Xot\Tests\Unit\Tests\Feature;

use Modules\Xot\Tests\Feature\ArrayServiceTest;
use Tests\TestCase;

/**
 * Class ArrayServiceTestTest.
 *
 * @covers \Modules\Xot\Tests\Feature\ArrayServiceTest
 */
final class ArrayServiceTestTest extends TestCase
{
    private ArrayServiceTest $arrayServiceTest;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->arrayServiceTest = new ArrayServiceTest();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->arrayServiceTest);
    }

    public function testToXLS(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testToXLSPhpoffice(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testSave(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
