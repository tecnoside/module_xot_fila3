<?php

namespace Modules\Xot\Tests\Unit\Providers\Traits;

use Modules\Xot\Providers\Traits\TranslatorTrait;
use Tests\TestCase;

/**
 * Class TranslatorTraitTest.
 *
 * @covers \Modules\Xot\Providers\Traits\TranslatorTrait
 */
final class TranslatorTraitTest extends TestCase
{
    private TranslatorTrait $translatorTrait;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->translatorTrait = $this->getMockBuilder(TranslatorTrait::class)
            ->setConstructorArgs([])
            ->getMockForTrait();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->translatorTrait);
    }

    public function testRegisterTranslator(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
