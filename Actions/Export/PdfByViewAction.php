<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;
use Illuminate\Support\Facades\Storage;

use function Safe\realpath;

use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\View\View;

class PdfByViewAction
{
    use QueueableAction;

    public function execute(
        View $view,
        string $filename = 'my_doc.pdf',
        string $disk = 'cache',
        string $out = 'download'
    ): string|BinaryFileResponse {
        $html = $view->render();
        return app(PdfByHtmlAction::class)->execute($html,$filename, $disk, $out);
    }
}
