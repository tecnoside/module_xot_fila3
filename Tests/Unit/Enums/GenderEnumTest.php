<?php

namespace Tests\Unit\Modules\Xot\Enums;

use Modules\Xot\Enums\GenderEnum;
use Tests\TestCase;

/**
 * Class GenderEnumTest.
 *
 * @covers \Modules\Xot\Enums\GenderEnum
 */
final class GenderEnumTest extends TestCase
{
    private GenderEnum $genderEnum;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->genderEnum = new GenderEnum();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->genderEnum);
    }

    public function testGetLabel(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetColor(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetIcon(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testCases(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testFrom(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testTryFrom(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
