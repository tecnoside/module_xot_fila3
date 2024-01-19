<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Store;

use Modules\Xot\Actions\Model\Store\HasManyAction;
use Tests\TestCase;

/**
 * Class HasManyActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Store\HasManyAction
 */
final class HasManyActionTest extends TestCase
{
    private HasManyAction $hasManyAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->hasManyAction = new HasManyAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->hasManyAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
