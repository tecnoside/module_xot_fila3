<?php

namespace Modules\Xot\Actions\Tests\Unit\Filament\Actions;

use Modules\Xot\Actions\Filament\Actions\ImportButton;
use Tests\TestCase;

/**
 * Class ImportButtonTest.
 *
 * @covers \Modules\Xot\Actions\Filament\Actions\ImportButton
 */
final class ImportButtonTest extends TestCase
{
    private ImportButton $importButton;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->importButton = new ImportButton();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->importButton);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
