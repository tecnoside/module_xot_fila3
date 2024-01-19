<?php

namespace Modules\Xot\Tests\Unit\Actions\Export;

use Modules\Xot\Actions\Export\PdfByModelAction;
use Tests\TestCase;

/**
 * Class PdfByModelActionTest.
 *
 * @covers \Modules\Xot\Actions\Export\PdfByModelAction
 */
final class PdfByModelActionTest extends TestCase
{
    private PdfByModelAction $pdfByModelAction;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        /** @todo Correctly instantiate tested object to use it. */
        $this->pdfByModelAction = new PdfByModelAction();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->pdfByModelAction);
    }

    public function testExecute(): void
    {
        /** @todo This test is incomplete. */
        self::markTestIncomplete();
    }
}
