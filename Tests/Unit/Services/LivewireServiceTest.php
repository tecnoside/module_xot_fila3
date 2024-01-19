<?php

namespace Tests\Unit\Modules\Xot\Services;

use Modules\Xot\Services\LivewireService;
use Tests\TestCase;

/**
 * Class LivewireServiceTest.
 *
 * @covers \Modules\Xot\Services\LivewireService
 */
final class LivewireServiceTest extends TestCase
{
    private LivewireService $livewireService;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->livewireService = new LivewireService();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->livewireService);
    }

    public function testRegisterComponents(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
