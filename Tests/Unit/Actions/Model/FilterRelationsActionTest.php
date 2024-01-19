<?php

namespace Modules\Xot\Tests\Unit\Actions\Model;

use Modules\Xot\Actions\Model\FilterRelationsAction;
use Tests\TestCase;

/**
 * Class FilterRelationsActionTest.
 *
 * @covers \Modules\Xot\Actions\Model\FilterRelationsAction
 */
final class FilterRelationsActionTest extends TestCase
{
    private FilterRelationsAction $filterRelationsAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->filterRelationsAction = new FilterRelationsAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->filterRelationsAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
