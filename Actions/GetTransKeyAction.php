<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

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
            Assert::string($class = Arr::get($backtrace, '1.class'));
        }

        $class = Str::of($class)
            ->replace('\Filament\Resources\\', '\\')
            ->toString();

        $arr = explode('\\', $class);
        if ('Modules' !== $arr[0]) {
            throw new \Exception('Invalid class name['.__LINE__.']['.__FILE__.']');
        }

        Assert::string($module = Arr::get($arr, '1'));
        $module_low = strtolower($module);

        Assert::string($model = Arr::get($arr, '2'));
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
