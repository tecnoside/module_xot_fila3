<?php

namespace Tests\Unit\Modules\Xot\Traits;

use Modules\Xot\Traits\Getter;
use Tests\TestCase;

/**
 * Class GetterTest.
 *
 * @covers \Modules\Xot\Traits\Getter
 */
final class GetterTest extends TestCase
{
    private Getter $getter;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->getter = $this->getMockBuilder(Getter::class)
            ->setConstructorArgs([])
            ->getMockForTrait();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->getter);
    }

    public function test__merge(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__getStatic(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__setStatic(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__concatBeforeStatic(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__callStatic(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__isset(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__concat(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__set(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__get(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__concatBefore(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__getVars(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
