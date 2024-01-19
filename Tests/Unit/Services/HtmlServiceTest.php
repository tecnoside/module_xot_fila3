<?php

namespace Tests\Unit\Modules\Xot\Services;

use Modules\Xot\Services\HtmlService;
use Tests\TestCase;

/**
 * Class HtmlServiceTest.
 *
 * @covers \Modules\Xot\Services\HtmlService
 */
final class HtmlServiceTest extends TestCase
{
    private HtmlService $htmlService;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->htmlService = new HtmlService();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->htmlService);
    }

    public function testToPdf(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
