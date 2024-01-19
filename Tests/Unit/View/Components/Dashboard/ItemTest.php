<?php

namespace Modules\Xot\View\Tests\Unit\Components\Dashboard;

use Modules\Xot\View\Components\Dashboard\Item;
use Tests\TestCase;

/**
 * Class ItemTest.
 *
 * @covers \Modules\Xot\View\Components\Dashboard\Item
 */
final class ItemTest extends TestCase
{
    private Item $item;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->item = new Item();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->item);
    }

    public function testRender(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
