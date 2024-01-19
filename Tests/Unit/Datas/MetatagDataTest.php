<?php

namespace Tests\Unit\Modules\Xot\Datas;

use Modules\Xot\Datas\MetatagData;
use ReflectionClass;
use Tests\TestCase;

/**
 * Class MetatagDataTest.
 *
 * @covers \Modules\Xot\Datas\MetatagData
 */
final class MetatagDataTest extends TestCase
{
    private MetatagData $metatagData;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->metatagData = new MetatagData();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->metatagData);
    }

    public function testMake(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetLogoHeader(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetLogoHeaderDark(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetLogoHeight(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testGetFavicon(): void
    {
        $expected = '42';
        $property = (new ReflectionClass(MetatagData::class))
            ->getProperty('favicon');
        $property->setValue($this->metatagData, $expected);
        self::assertSame($expected, $this->metatagData->getFavicon());
    }
}
