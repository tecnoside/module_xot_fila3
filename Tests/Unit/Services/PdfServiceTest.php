<?php

namespace Tests\Unit\Modules\Xot\Services;

use Mockery;
use Modules\Xot\Services\PdfService;
use PdfService as PdfServiceAlias;
use ReflectionClass;
use Tests\TestCase;

/**
 * Class PdfServiceTest.
 *
 * @covers \Modules\Xot\Services\PdfService
 */
final class PdfServiceTest extends TestCase
{
    private PdfService $pdfService;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->pdfService = new PdfService();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->pdfService);
    }

    public function testGetInstance(): void
    {
        $expected = Mockery::mock(PdfServiceAlias::class);
        $property = (new ReflectionClass(PdfService::class))
            ->getProperty('instance');
        $property->setValue(null, $expected);
        self::assertSame($expected, PdfService::getInstance());
    }

    public function testMake(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testMergePdf(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testAddFilenames(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
