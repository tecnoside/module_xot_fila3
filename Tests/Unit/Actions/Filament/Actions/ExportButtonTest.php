<?php

namespace Modules\Xot\Actions\Tests\Unit\Filament\Actions;

use Modules\Xot\Actions\Filament\Actions\ExportButton;
use Tests\TestCase;

/**
 * Class ExportButtonTest.
 *
 * @covers \Modules\Xot\Actions\Filament\Actions\ExportButton
 */
final class ExportButtonTest extends TestCase
{
    private ExportButton $exportButton;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->exportButton = new ExportButton();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->exportButton);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
