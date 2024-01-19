<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Store;

use Modules\Xot\Actions\Model\Store\HasOneAction;
use Tests\TestCase;

/**
 * Class HasOneActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Store\HasOneAction
 */
final class HasOneActionTest extends TestCase
{
    private HasOneAction $hasOneAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->hasOneAction = new HasOneAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->hasOneAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
