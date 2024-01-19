<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Store;

use Modules\Xot\Actions\Model\Store\BelongsToAction;
use Tests\TestCase;

/**
 * Class BelongsToActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Store\BelongsToAction
 */
final class BelongsToActionTest extends TestCase
{
    private BelongsToAction $belongsToAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->belongsToAction = new BelongsToAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->belongsToAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
