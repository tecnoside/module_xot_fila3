<?php

declare(strict_types=1);

/**
 * @see https://github.com/TheDoctor0/laravel-factory-generator. 24 days ago
 * @see https://github.com/mpociot/laravel-test-factory-helper  on 2 Mar 2020.
 * @see https://github.com/laravel-shift/factory-generator on 10 Aug.
 * @see https://dev.to/marcosgad/make-factory-more-organized-laravel-3c19.
 * @see https://medium.com/@yohan7788/seeders-and-faker-in-laravel-6806084a0c7.
 */

namespace Modules\Xot\Actions\Factory;

use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

/**
 * @see https://github.com/mpociot/laravel-test-factory-helper/blob/master/src/Console/GenerateCommand.php#L213
 */
class GetFactoryAction
{
    use QueueableAction;

    public function execute(string $model_class){
        
        $factory_class=$this->getFactoryClass($model_class);

         if (class_exists($factory_class)) {
            return $factory_class::new();
        }

        throw new \Exception('Generating Factory ['.$factory_class.'] press [F5] to refresh page ['.__LINE__.']['.__FILE__.']');
    }

    public function getFactoryClass(string $model_class):string {
        $model_name=class_basename($model_class);
        $factory_class=Str::of($model_class)
            ->before('\Models\\')
            ->append('\Database\Factories\\')
            ->append($model_name)
            ->append('Factory')
            ->toString();
        return $factory_class;
    }
}