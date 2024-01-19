<?php

namespace Modules\Xot\Actions\Tests\Unit\Model\Update;

use Modules\Xot\Actions\Model\Update\MorphToOneAction;
use Tests\TestCase;

/**
 * Class MorphToOneActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\Update\MorphToOneAction
 */
final class MorphToOneActionTest extends TestCase
{
    private MorphToOneAction $morphToOneAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->morphToOneAction = new MorphToOneAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->morphToOneAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
