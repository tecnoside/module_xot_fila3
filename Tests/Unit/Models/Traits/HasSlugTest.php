<?php

namespace Modules\Xot\Tests\Unit\Models\Traits;

use Modules\Xot\Models\Traits\HasSlug;
use Tests\TestCase;

/**
 * Class HasSlugTest.
 *
 * @covers \Modules\Xot\Models\Traits\HasSlug
 */
final class HasSlugTest extends TestCase
{
    private HasSlug $hasSlug;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->hasSlug = $this->getMockBuilder(HasSlug::class)
            ->setConstructorArgs([])
            ->getMockForTrait();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->hasSlug);
    }

    public function testFindBySlug(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testSlug(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testSetSlugAttribute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
