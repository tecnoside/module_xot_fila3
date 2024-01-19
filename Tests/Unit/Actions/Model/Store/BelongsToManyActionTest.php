<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Store;

use Modules\Xot\Actions\Model\Store\BelongsToManyAction;
use Tests\TestCase;

/**
 * Class BelongsToManyActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Store\BelongsToManyAction
 */
final class BelongsToManyActionTest extends TestCase
{
    private BelongsToManyAction $belongsToManyAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->belongsToManyAction = new BelongsToManyAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->belongsToManyAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
