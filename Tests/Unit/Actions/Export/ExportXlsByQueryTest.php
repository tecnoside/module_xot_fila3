<?php

namespace Modules\Xot\Tests\Unit\Actions\Export;

use Modules\Xot\Actions\Export\ExportXlsByQuery;
use Tests\TestCase;

/**
 * Class ExportXlsByQueryTest.
 *
 * @covers \Modules\Xot\Actions\Export\ExportXlsByQuery
 */
final class ExportXlsByQueryTest extends TestCase
{
    private ExportXlsByQuery $exportXlsByQuery;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->exportXlsByQuery = new ExportXlsByQuery();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->exportXlsByQuery);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
