<?php

namespace Tests\Unit\Modules\Xot\Exceptions;

use Modules\Xot\Exceptions\ModelDeletionException;
use Tests\TestCase;

/**
 * Class ModelDeletionExceptionTest.
 *
 * @covers \Modules\Xot\Exceptions\ModelDeletionException
 */
final class ModelDeletionExceptionTest extends TestCase
{
    private ModelDeletionException $modelDeletionException;

    private int $id;

    private string $model;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->id = 42;
        $this->model = '42';
        $this->modelDeletionException = new ModelDeletionException($this->id, $this->model);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->modelDeletionException);
        unset($this->id);
        unset($this->model);
    }

    public function testStatus(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testHelp(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }

    public function testError(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
