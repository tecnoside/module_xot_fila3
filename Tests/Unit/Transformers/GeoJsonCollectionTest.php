<?php

namespace Tests\Unit\Modules\Xot\Transformers;

use Modules\Xot\Transformers\GeoJsonCollection;
use Tests\TestCase;

/**
 * Class GeoJsonCollectionTest.
 *
 * @covers \Modules\Xot\Transformers\GeoJsonCollection
 */
final class GeoJsonCollectionTest extends TestCase
{
    private GeoJsonCollection $geoJsonCollection;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->geoJsonCollection = new GeoJsonCollection();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->geoJsonCollection);
    }

    public function testToArray(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
