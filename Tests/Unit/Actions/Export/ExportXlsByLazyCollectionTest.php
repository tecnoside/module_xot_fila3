<?php

namespace Modules\Xot\Tests\Unit\Actions\Export;

use Modules\Xot\Actions\Export\ExportXlsByLazyCollection;
use Tests\TestCase;

/**
 * Class ExportXlsByLazyCollectionTest.
 *
 * @covers \Modules\Xot\Actions\Export\ExportXlsByLazyCollection
 */
final class ExportXlsByLazyCollectionTest extends TestCase
{
    private ExportXlsByLazyCollection $exportXlsByLazyCollection;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->exportXlsByLazyCollection = new ExportXlsByLazyCollection();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->exportXlsByLazyCollection);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
