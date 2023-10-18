<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;
use Spatie\QueueableAction\QueueableAction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PdfByHtmlAction {
    use QueueableAction;

    public function execute(
        string $html,
        string $filename='my_doc.pdf',
        string $disk='cache',
        string $out='download'
        ) {
        include_once realpath(__DIR__.'/../../Services/vendor/autoload.php');
        $html2pdf = new \Spipu\Html2Pdf\Html2Pdf('L', 'A4', 'it');
        $html2pdf->writeHTML($html);
        //$filename = 'my_doc.pdf';
        $path = Storage::disk($disk)->path($filename);
        $html2pdf->output($path, 'F');

        $res = $html2pdf->output($path, 'F');

        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        switch($out){
            case 'download':
                return response()->download($path, $filename, $headers);
        }
        return $path;

    }
}
