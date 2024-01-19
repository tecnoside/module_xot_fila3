<?php

namespace Modules\Xot\Tests\Unit\Actions\Filament;

use Modules\Xot\Actions\Filament\GetModulesNavigationItems;
use Tests\TestCase;

/**
 * Class GetModulesNavigationItemsTest.
 *
 * @covers \Modules\Xot\Actions\Filament\GetModulesNavigationItems
 */
final class GetModulesNavigationItemsTest extends TestCase
{
    private GetModulesNavigationItems $getModulesNavigationItems;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->getModulesNavigationItems = new GetModulesNavigationItems();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->getModulesNavigationItems);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
