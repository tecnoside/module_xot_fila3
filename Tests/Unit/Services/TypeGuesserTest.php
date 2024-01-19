<?php

namespace Tests\Unit\Modules\Xot\Services;

use Faker\Generator;
use Mockery;
use Mockery\Mock;
use Modules\Xot\Services\TypeGuesser;
use Tests\TestCase;

/**
 * Class TypeGuesserTest.
 *
 * @covers \Modules\Xot\Services\TypeGuesser
 */
final class TypeGuesserTest extends TestCase
{
    private TypeGuesser $typeGuesser;

    private Generator|Mock $faker;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Mockery::mock(Generator::class);
        $this->typeGuesser = new TypeGuesser($this->faker);
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->typeGuesser);
        unset($this->faker);
    }

    public function testGuess(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
