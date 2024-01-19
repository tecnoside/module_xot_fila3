<?php

namespace Modules\Xot\Tests\Unit\Actions\Export;

use Modules\Xot\Actions\Export\PdfByHtmlAction;
use Tests\TestCase;

/**
 * Class PdfByHtmlActionTest.
 *
 * @covers \Modules\Xot\Actions\Export\PdfByHtmlAction
 */
final class PdfByHtmlActionTest extends TestCase
{
    private PdfByHtmlAction $pdfByHtmlAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->pdfByHtmlAction = new PdfByHtmlAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->pdfByHtmlAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
