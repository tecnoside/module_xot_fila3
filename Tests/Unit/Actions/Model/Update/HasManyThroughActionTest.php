<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Update;

use Modules\Xot\Actions\Model\Update\HasManyThroughAction;
use Tests\TestCase;

/**
 * Class HasManyThroughActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Update\HasManyThroughAction
 */
final class HasManyThroughActionTest extends TestCase
{
    private HasManyThroughAction $hasManyThroughAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->hasManyThroughAction = new HasManyThroughAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->hasManyThroughAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
