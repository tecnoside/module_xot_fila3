<?php

namespace Modules\Xot\Tests\Unit\Actions\Export;

use Modules\Xot\Actions\Export\ExportXlsStreamByLazyCollection;
use Tests\TestCase;

/**
 * Class ExportXlsStreamByLazyCollectionTest.
 *
 * @covers \Modules\Xot\Actions\Export\ExportXlsStreamByLazyCollection
 */
final class ExportXlsStreamByLazyCollectionTest extends TestCase
{
    private ExportXlsStreamByLazyCollection $exportXlsStreamByLazyCollection;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->exportXlsStreamByLazyCollection = new ExportXlsStreamByLazyCollection();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->exportXlsStreamByLazyCollection);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testHeadings(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
