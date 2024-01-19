<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Update;

use Modules\Xot\Actions\Model\Update\RelationAction;
use Tests\TestCase;

/**
 * Class RelationActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Update\RelationAction
 */
final class RelationActionTest extends TestCase
{
    private RelationAction $relationAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->relationAction = new RelationAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->relationAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
