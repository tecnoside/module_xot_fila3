<?php

namespace Modules\Xot\Tests\Unit\Actions\ModelClass;

use Modules\Xot\Actions\ModelClass\CopyFromLastYearAction;
use Tests\TestCase;

/**
 * Class CopyFromLastYearActionTest.
 *
 * @covers \Modules\Xot\Actions\ModelClass\CopyFromLastYearAction
 */
final class CopyFromLastYearActionTest extends TestCase
{
    private CopyFromLastYearAction $copyFromLastYearAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->copyFromLastYearAction = new CopyFromLastYearAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->copyFromLastYearAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
