<?php

namespace Tests\Unit\Modules\Xot\Services;

use Mockery;
use Modules\Xot\Services\UrlService;
use ReflectionClass;
use Tests\TestCase;
use UrlService as UrlServiceAlias;

/**
 * Class UrlServiceTest.
 *
 * @covers \Modules\Xot\Services\UrlService
 */
final class UrlServiceTest extends TestCase
{
    private UrlService $urlService;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->urlService = new UrlService();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->urlService);
    }

    public function testGetInstance(): void
    {
        $expected = Mockery::mock(UrlServiceAlias::class);
        $property = (new ReflectionClass(UrlService::class))
            ->getProperty('instance');
        $property->setValue(null, $expected);
        self::assertSame($expected, UrlService::getInstance());
    }

    public function testMake(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testCheckValidUrl(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
