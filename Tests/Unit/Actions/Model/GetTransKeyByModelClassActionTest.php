<?php

namespace Modules\Xot\Tests\Unit\Actions\Model;

use Modules\Xot\Actions\Model\GetTransKeyByModelClassAction;
use Tests\TestCase;

/**
 * Class GetTransKeyByModelClassActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\GetTransKeyByModelClassAction
 */
final class GetTransKeyByModelClassActionTest extends TestCase
{
    private GetTransKeyByModelClassAction $getTransKeyByModelClassAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->getTransKeyByModelClassAction = new GetTransKeyByModelClassAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->getTransKeyByModelClassAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
