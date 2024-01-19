<?php

namespace Modules\Xot\Tests\Unit\Actions\Model;

use Modules\Xot\Actions\Model\DeleteTableIndexByModelClassIndexNameAction;
use Tests\TestCase;

/**
 * Class DeleteTableIndexByModelClassIndexNameActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\DeleteTableIndexByModelClassIndexNameAction
 */
final class DeleteTableIndexByModelClassIndexNameActionTest extends TestCase
{
    private DeleteTableIndexByModelClassIndexNameAction $deleteTableIndexByModelClassIndexNameAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->deleteTableIndexByModelClassIndexNameAction = new DeleteTableIndexByModelClassIndexNameAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->deleteTableIndexByModelClassIndexNameAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
