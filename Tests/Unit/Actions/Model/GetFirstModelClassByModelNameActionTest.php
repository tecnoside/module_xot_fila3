<?php

namespace Modules\Xot\Tests\Unit\Actions\Model;

use Modules\Xot\Actions\Model\GetFirstModelClassByModelNameAction;
use Tests\TestCase;

/**
 * Class GetFirstModelClassByModelNameActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\GetFirstModelClassByModelNameAction
 */
final class GetFirstModelClassByModelNameActionTest extends TestCase
{
    private GetFirstModelClassByModelNameAction $getFirstModelClassByModelNameAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->getFirstModelClassByModelNameAction = new GetFirstModelClassByModelNameAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->getFirstModelClassByModelNameAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
