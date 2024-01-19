<?php

namespace Modules\Xot\Tests\Unit\Actions\Module;

use Modules\Xot\Actions\Module\GetModuleNameFromModelAction;
use Tests\TestCase;

/**
 * Class GetModuleNameFromModelActionTest.
 *
 * @covers \Modules\Xot\Actions\Module\GetModuleNameFromModelAction
 */
final class GetModuleNameFromModelActionTest extends TestCase
{
    private GetModuleNameFromModelAction $getModuleNameFromModelAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->getModuleNameFromModelAction = new GetModuleNameFromModelAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->getModuleNameFromModelAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
