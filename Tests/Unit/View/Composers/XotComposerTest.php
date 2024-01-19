<?php

namespace Modules\Xot\Tests\Unit\View\Composers;

use Modules\Xot\View\Composers\XotComposer;
use Tests\TestCase;

/**
 * Class XotComposerTest.
 *
 * @covers \Modules\Xot\View\Composers\XotComposer
 */
final class XotComposerTest extends TestCase
{
    private XotComposer $xotComposer;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->xotComposer = new XotComposer();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->xotComposer);
    }

    public function testCompose(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testAsset(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testMetatag(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__call(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
