<?php

namespace Modules\Xot\Filament\Resources\Tests\Unit\XotBaseResource\RelationManager;

use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;
use Tests\TestCase;

/**
 * Class XotBaseRelationManagerTest.
 *
 * @covers \Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager
 */
final class XotBaseRelationManagerTest extends TestCase
{
    private XotBaseRelationManager $xotBaseRelationManager;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->xotBaseRelationManager = $this->getMockBuilder(XotBaseRelationManager::class)
            ->setConstructorArgs([])
            ->getMockForAbstractClass();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->xotBaseRelationManager);
    }

    public function testGetModuleName(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testTrans(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetNavigationLabel(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetNavigationGroup(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
