<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Store;

use Modules\Xot\Actions\Model\Store\MorphManyAction;
use Tests\TestCase;

/**
 * Class MorphManyActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Store\MorphManyAction
 */
final class MorphManyActionTest extends TestCase
{
    private MorphManyAction $morphManyAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->morphManyAction = new MorphManyAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->morphManyAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
