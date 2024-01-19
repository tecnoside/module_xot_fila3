<?php

namespace Modules\Xot\Tests\Unit\Actions\Export;

use Modules\Xot\Actions\Export\XlsByModelClassAction;
use Tests\TestCase;

/**
 * Class XlsByModelClassActionTest.
 *
 * @covers \Modules\Xot\Actions\Export\XlsByModelClassAction
 */
final class XlsByModelClassActionTest extends TestCase
{
    private XlsByModelClassAction $xlsByModelClassAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->xlsByModelClassAction = new XlsByModelClassAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->xlsByModelClassAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
