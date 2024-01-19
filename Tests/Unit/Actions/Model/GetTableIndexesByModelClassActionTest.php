<?php

namespace Modules\Xot\Tests\Unit\Actions\Model;

use Modules\Xot\Actions\Model\GetTableIndexesByModelClassAction;
use Tests\TestCase;

/**
 * Class GetTableIndexesByModelClassActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\GetTableIndexesByModelClassAction
 */
final class GetTableIndexesByModelClassActionTest extends TestCase
{
    private GetTableIndexesByModelClassAction $getTableIndexesByModelClassAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->getTableIndexesByModelClassAction = new GetTableIndexesByModelClassAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->getTableIndexesByModelClassAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
