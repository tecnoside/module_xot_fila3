<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Spipu\Html2Pdf\Html2Pdf;
use Illuminate\Support\Facades\Storage;

use function Safe\realpath;

use Spatie\QueueableAction\QueueableAction;

class PdfByHtmlAction
{
    use QueueableAction;

    public function execute(
        string $html,
        string $filename = 'my_doc.pdf',
        string $disk = 'cache',
        string $out = 'download'
    ): string|BinaryFileResponse {
        include_once realpath(__DIR__.'/../../Services/vendor/autoload.php');
        $html2pdf = new Html2Pdf('L', 'A4', 'it');
        $html2pdf->writeHTML($html);
        // $filename = 'my_doc.pdf';
        $path = Storage::disk($disk)->path($filename);
        $html2pdf->output($path, 'F');

        $res = $html2pdf->output($path, 'F');

        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        return match ($out) {
            'download' => response()->download($path, $filename, $headers),
            default => $path,
        };
    }
}
