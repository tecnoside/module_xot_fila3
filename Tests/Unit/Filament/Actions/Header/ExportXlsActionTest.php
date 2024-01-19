<?php

namespace Modules\Xot\Filament\Tests\Unit\Actions\Header;

use Modules\Xot\Filament\Actions\Header\ExportXlsAction;
use Tests\TestCase;

/**
 * Class ExportXlsActionTest.
 *
 * @covers \Modules\Xot\Filament\Actions\Header\ExportXlsAction
 */
final class ExportXlsActionTest extends TestCase
{
    private ExportXlsAction $exportXlsAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->exportXlsAction = new ExportXlsAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->exportXlsAction);
    }

    public function testGetDefaultName(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
