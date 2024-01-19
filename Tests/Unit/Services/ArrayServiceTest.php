<?php

namespace Tests\Unit\Modules\Xot\Services;

use ArrayService as ArrayServiceAlias;
use Mockery;
use Modules\Xot\Services\ArrayService;
use ReflectionClass;
use Tests\TestCase;

/**
 * Class ArrayServiceTest.
 *
 * @covers \Modules\Xot\Services\ArrayService
 */
final class ArrayServiceTest extends TestCase
{
    private ArrayService $arrayService;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->arrayService = new ArrayService();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->arrayService);
    }

    public function testGetInstance(): void
    {
        $expected = Mockery::mock(ArrayServiceAlias::class);
        $property = (new ReflectionClass(ArrayService::class))
            ->getProperty('instance');
        $property->setValue(null, $expected);
        self::assertSame($expected, ArrayService::getInstance());
    }

    public function testMake(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testSave(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testFromObjects(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testRangeIntersect(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testFixType(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testDiff_assoc_recursive(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetArray(): void
    {
        $expected = [];
        $property = (new ReflectionClass(ArrayService::class))
            ->getProperty('array');
        $property->setValue($this->arrayService, $expected);
        self::assertSame($expected, $this->arrayService->getArray());
    }

    public function testSetArray(): void
    {
        $expected = [];
        $property = (new ReflectionClass(ArrayService::class))
            ->getProperty('array');
        $this->arrayService->setArray($expected);
        self::assertSame($expected, $property->getValue($this->arrayService));
    }

    public function testSetFilename(): void
    {
        $expected = '42';
        $property = (new ReflectionClass(ArrayService::class))
            ->getProperty('filename');
        $this->arrayService->setFilename($expected);
        self::assertSame($expected, $property->getValue($this->arrayService));
    }

    public function testGetFilename(): void
    {
        $expected = '42';
        $property = (new ReflectionClass(ArrayService::class))
            ->getProperty('filename');
        $property->setValue($this->arrayService, $expected);
        self::assertSame($expected, $this->arrayService->getFilename());
    }

    public function testToXLS(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testToHtml(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetHeader(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testFixCellsType(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testToCsv(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testToXLS_phpoffice(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
