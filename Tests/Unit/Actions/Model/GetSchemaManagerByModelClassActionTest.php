<?php

namespace Modules\Xot\Tests\Unit\Actions\Model;

use Modules\Xot\Actions\Model\GetSchemaManagerByModelClassAction;
use Tests\TestCase;

/**
 * Class GetSchemaManagerByModelClassActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\GetSchemaManagerByModelClassAction
 */
final class GetSchemaManagerByModelClassActionTest extends TestCase
{
    private GetSchemaManagerByModelClassAction $getSchemaManagerByModelClassAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->getSchemaManagerByModelClassAction = new GetSchemaManagerByModelClassAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->getSchemaManagerByModelClassAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
