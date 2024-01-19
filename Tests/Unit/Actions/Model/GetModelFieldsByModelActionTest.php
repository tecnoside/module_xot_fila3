<?php

namespace Modules\Xot\Tests\Unit\Actions\Model;

use Modules\Xot\Actions\Model\GetModelFieldsByModelAction;
use Tests\TestCase;

/**
 * Class GetModelFieldsByModelActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\GetModelFieldsByModelAction
 */
final class GetModelFieldsByModelActionTest extends TestCase
{
    private GetModelFieldsByModelAction $getModelFieldsByModelAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->getModelFieldsByModelAction = new GetModelFieldsByModelAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->getModelFieldsByModelAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
