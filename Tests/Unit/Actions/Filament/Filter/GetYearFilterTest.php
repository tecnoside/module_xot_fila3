<?php

namespace Modules\Xot\Actions\Tests\Unit\Filament\Filter;

use Modules\Xot\Actions\Filament\Filter\GetYearFilter;
use Tests\TestCase;

/**
 * Class GetYearFilterTest.
 *
 * @covers \Modules\Xot\Actions\Filament\Filter\GetYearFilter
 */
final class GetYearFilterTest extends TestCase
{
    private GetYearFilter $getYearFilter;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->getYearFilter = new GetYearFilter();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->getYearFilter);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
