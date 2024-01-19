<?php

namespace Tests\Unit\Modules\Xot\Actions;

use Modules\Xot\Actions\GetStyleClassByViewAction;
use Tests\TestCase;

/**
 * Class GetStyleClassByViewActionTest.
 *
 * @covers \Modules\Xot\Actions\GetStyleClassByViewAction
 */
final class GetStyleClassByViewActionTest extends TestCase
{
    private GetStyleClassByViewAction $getStyleClassByViewAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->getStyleClassByViewAction = new GetStyleClassByViewAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->getStyleClassByViewAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
