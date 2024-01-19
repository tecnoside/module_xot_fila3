<?php

namespace Modules\Xot\Tests\Unit\Actions\Model;

use Modules\Xot\Actions\Model\UpdateAction;
use Tests\TestCase;

/**
 * Class UpdateActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\UpdateAction
 */
final class UpdateActionTest extends TestCase
{
    private UpdateAction $updateAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->updateAction = new UpdateAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->updateAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
