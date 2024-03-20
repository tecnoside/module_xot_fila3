<?php
/**
 * -WIP.
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

use Illuminate\Support\Str;

use function Safe\file;

use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Finder\SplFileInfo as File;
use Webmozart\Assert\Assert;

class GenerateTableColumnsByFileAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     * return number of input added.
     */
    public function execute(File $file): int
    {
        if (! $file->isFile()) {
            return 0;
        }
        if (! \in_array($file->getExtension(), ['php'], false)) {
            return 0;
        }

        $class_name = Str::replace(base_path('Modules/'), 'Modules/', $file->getPathname());
        Assert::string($class_name = Str::replace('/', '\\', $class_name));
        $class_name = Str::substr($class_name, 0, -4);
        $model_name = app($class_name)->getModel();
        // $contents = $file->getContents();

        // dddx([
        //    'message'=>'HALT',
        //    'content'=>$file->getContents(),
        // ]);

        $fillable = app($model_name)->getFillable();
        Assert::classExists($class_name);
        $reflection_class = new \ReflectionClass($class_name);
        $table_method = $reflection_class->getMethod('table');

        $start_line = $table_method->getStartLine() - 1; // it's actually - 1, otherwise you wont get the function() block
        $end_line = $table_method->getEndLine();
        $length = $end_line - $start_line;
        Assert::string($file_name = $table_method->getFileName());
        // $contents= $file->getContents();
        $source = file($file_name);
        $body = implode('', \array_slice($source, $start_line, $length));

        $pos = strpos($body, '->columns(');
        $pos1 = strpos($body, ')', $pos);

        $body1 = substr($body, $pos);

        dd(
            [
                'class_name' => $class_name,
                'model_name' => $model_name,
                'fillable' => $fillable,
                // 't1'=>app($class_name)->form(app(\Filament\Forms\Form::class)),
                'methods' => get_class_methods(app($class_name)),
                'form_method' => $table_method,
                'form_method_methods' => get_class_methods($table_method),
                'body' => $body,
                'pos' => $pos,
                'pos1' => $pos1,
            ]
        );
    }

    public function ddFile(File $file): void
    {
        dd(
            [
                'getRelativePath' => $file->getRelativePath(), // =  ""
                'getRelativePathname' => $file->getRelativePathname(), //  AssenzeResource.php
                'getFilenameWithoutExtension' => $file->getFilenameWithoutExtension(), // AssenzeResource
                // 'getContents' => $file->getContents(),
                'getPath' => $file->getPath(), // = /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources
                'getFilename' => $file->getFilename(), // = AssenzeResource.php
                'getExtension' => $file->getExtension(), // php
                'getBasename' => $file->getBasename(), // AssenzeResource.php
                'getPathname' => $file->getPathname(), // "/var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources/AssenzeResource.php
                'isFile' => $file->isFile(), // true
                'getRealPath' => $file->getRealPath(), // /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources/AssenzeResource.php
                // 'getFileInfo' => $file->getFileInfo(),
                // 'getPathInfo' => $file->getPathInfo(),
                'methods' => get_class_methods($file),
            ]
        );
    }
}
