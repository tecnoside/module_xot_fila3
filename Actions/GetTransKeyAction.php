<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

class GetTransKeyAction
{
    use QueueableAction;

    /**
     * PER ORA FUNZIONA SOLO CON LIVEWIRE.
     */
    public function execute(string $class = ''): string
    {
        if ('' === $class) {
            $backtrace = debug_backtrace();
            $class = Arr::get($backtrace, '1.class');
        }

        $class = str_replace('\Filament\Resources\\', '\\', $class);

        $arr = explode('\\', $class);
        if ('Modules' !== $arr[0]) {
            throw new \Exception('Invalid class name['.__LINE__.']['.__FILE__.']');
        }

        $module = Arr::get($arr, '1');
        $module_low = strtolower($module);

        $model = Arr::get($arr, '2');
        $model = Str::before($model, 'Resource');
        $model_low = strtolower($model);

        $callable = function ($item) use ($model) {
            if (Str::endsWith($item, $model)) {
                $item = Str::before($item, $model);
            }

            return Str::kebab($item);
        };

        $res = collect($arr)
            ->skip(3)
            ->map($callable)
            ->implode('.')
        ;

        $tmp = $module_low.'::'.$model_low.'.'.$res;

        return $tmp;
    }
}
