<?php

namespace Modules\Xot\Actions\Tests\Unit\Filament\Actions;

use Modules\Xot\Actions\Filament\Actions\CopyFromLastYearButton;
use Tests\TestCase;

/**
 * Class CopyFromLastYearButtonTest.
 *
 * @covers \Modules\Xot\Actions\Filament\Actions\CopyFromLastYearButton
 */
final class CopyFromLastYearButtonTest extends TestCase
{
    private CopyFromLastYearButton $copyFromLastYearButton;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->copyFromLastYearButton = new CopyFromLastYearButton();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->copyFromLastYearButton);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
