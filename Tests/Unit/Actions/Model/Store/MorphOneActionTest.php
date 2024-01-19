<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Store;

use Modules\Xot\Actions\Model\Store\MorphOneAction;
use Tests\TestCase;

/**
 * Class MorphOneActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Store\MorphOneAction
 */
final class MorphOneActionTest extends TestCase
{
    private MorphOneAction $morphOneAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->morphOneAction = new MorphOneAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->morphOneAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
