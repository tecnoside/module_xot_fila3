<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PdfByModelAction
{
    use QueueableAction;

    public function execute(
        Model $model,
        string $filename = 'my_doc.pdf',
        string $disk = 'cache',
        string $out = 'download'
    ): string|BinaryFileResponse {
        $model_class = $model::class;
        $model_name = class_basename($model_class);
        $module = Str::between($model_class, '\Modules\\', '\Models');
        $view_name = strtolower($module).'::'.Str::kebab($model_name).'.show.pdf';
        $view_params = [
            'view' => $view_name,
            'row' => $model,
        ];
        $view = view($view_name, $view_params);
        $html = $view->render();

        return app(PdfByHtmlAction::class)->execute($html, $filename, $disk, $out);
    }
}
