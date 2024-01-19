<?php

namespace Modules\Xot\Tests\Unit\Providers\Filament;

use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Tests\TestCase;

/**
 * Class XotBasePanelProviderTest.
 *
 * @covers \Modules\Xot\Providers\Filament\XotBasePanelProvider
 */
final class XotBasePanelProviderTest extends TestCase
{
    private XotBasePanelProvider $xotBasePanelProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->xotBasePanelProvider = $this->getMockBuilder(XotBasePanelProvider::class)
            ->setConstructorArgs([])
            ->getMockForAbstractClass();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->xotBasePanelProvider);
    }

    public function testPanel(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
