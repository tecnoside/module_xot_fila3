<?php

namespace Modules\Xot\Tests\Unit\Providers\Filament;

use Modules\Xot\Providers\Filament\XotBaseMainPanelProvider;
use Tests\TestCase;

/**
 * Class XotBaseMainPanelProviderTest.
 *
 * @covers \Modules\Xot\Providers\Filament\XotBaseMainPanelProvider
 */
final class XotBaseMainPanelProviderTest extends TestCase
{
    private XotBaseMainPanelProvider $xotBaseMainPanelProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->xotBaseMainPanelProvider = $this->getMockBuilder(XotBaseMainPanelProvider::class)
            ->setConstructorArgs([])
            ->getMockForAbstractClass();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->xotBaseMainPanelProvider);
    }

    public function testPanel(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
