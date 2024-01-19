<?php

namespace Modules\Xot\Tests\Unit\Exceptions\Handlers;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Mockery;
use Mockery\Mock;
use Modules\Xot\Exceptions\Handlers\HandlerDecorator;
use Modules\Xot\Exceptions\Handlers\HandlersRepository;
use Tests\TestCase;

/**
 * Class HandlerDecoratorTest.
 *
 * @covers \Modules\Xot\Exceptions\Handlers\HandlerDecorator
 */
final class HandlerDecoratorTest extends TestCase
{
    private HandlerDecorator $handlerDecorator;

    private ExceptionHandler|Mock $defaultHandler;

    private HandlersRepository|Mock $repository;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->defaultHandler = Mockery::mock(ExceptionHandler::class);
        $this->repository = Mockery::mock(HandlersRepository::class);
        $this->handlerDecorator = new HandlerDecorator($this->defaultHandler, $this->repository);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->handlerDecorator);
        unset($this->defaultHandler);
        unset($this->repository);
    }

    public function testReport(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testReporter(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testRender(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testRenderer(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testRenderForConsole(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testConsoleRenderer(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testShouldReport(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function test__call(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
