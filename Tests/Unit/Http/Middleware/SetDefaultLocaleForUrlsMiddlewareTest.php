<?php

namespace Modules\Xot\Tests\Unit\Http\Middleware;

use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrlsMiddleware;
use Tests\TestCase;

/**
 * Class SetDefaultLocaleForUrlsMiddlewareTest.
 *
 * @covers \Modules\Xot\Http\Middleware\SetDefaultLocaleForUrlsMiddleware
 */
final class SetDefaultLocaleForUrlsMiddlewareTest extends TestCase
{
    private SetDefaultLocaleForUrlsMiddleware $setDefaultLocaleForUrlsMiddleware;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->setDefaultLocaleForUrlsMiddleware = new SetDefaultLocaleForUrlsMiddleware();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->setDefaultLocaleForUrlsMiddleware);
    }

    public function testHandle(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
