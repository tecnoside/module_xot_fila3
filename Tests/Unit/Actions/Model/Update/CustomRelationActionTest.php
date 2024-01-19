<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Update;

use Modules\Xot\Actions\Model\Update\CustomRelationAction;
use Tests\TestCase;

/**
 * Class CustomRelationActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Update\CustomRelationAction
 */
final class CustomRelationActionTest extends TestCase
{
    private CustomRelationAction $customRelationAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->customRelationAction = new CustomRelationAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->customRelationAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
