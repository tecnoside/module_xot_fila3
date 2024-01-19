<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Store;

use Modules\Xot\Actions\Model\Store\MorphToManyAction;
use Tests\TestCase;

/**
 * Class MorphToManyActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Store\MorphToManyAction
 */
final class MorphToManyActionTest extends TestCase
{
    private MorphToManyAction $morphToManyAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->morphToManyAction = new MorphToManyAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->morphToManyAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
