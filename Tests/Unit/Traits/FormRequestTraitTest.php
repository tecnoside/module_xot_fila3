<?php

namespace Tests\Unit\Modules\Xot\Traits;

use Modules\Xot\Traits\FormRequestTrait;
use Tests\TestCase;

/**
 * Class FormRequestTraitTest.
 *
 * @covers \Modules\Xot\Traits\FormRequestTrait
 */
final class FormRequestTraitTest extends TestCase
{
    private FormRequestTrait $formRequestTrait;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->formRequestTrait = $this->getMockBuilder(FormRequestTrait::class)
            ->setConstructorArgs([])
            ->getMockForTrait();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->formRequestTrait);
    }

    public function testMessages(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
