<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Store;

use Modules\Xot\Actions\Model\Store\MorphedByManyAction;
use Tests\TestCase;

/**
 * Class MorphedByManyActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Store\MorphedByManyAction
 */
final class MorphedByManyActionTest extends TestCase
{
    private MorphedByManyAction $morphedByManyAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->morphedByManyAction = new MorphedByManyAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->morphedByManyAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
