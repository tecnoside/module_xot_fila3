<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Store;

use Modules\Xot\Actions\Model\Store\PivotAction;
use Tests\TestCase;

/**
 * Class PivotActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Store\PivotAction
 */
final class PivotActionTest extends TestCase
{
    private PivotAction $pivotAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->pivotAction = new PivotAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->pivotAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
