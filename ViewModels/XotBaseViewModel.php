<?php
/**
 * @see https://martinjoo.dev/how-to-use-data-transfer-objects-and-actions-in-laravel
 */

declare(strict_types=1);

namespace Modules\Xot\ViewModels;

use ReflectionClass;
use ReflectionMethod;
use Reflection;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Str;

abstract class XotBaseViewModel implements Arrayable
{
    /**
     * Undocumented function.
     */
    public function toArray(): array
    {
        return collect((new ReflectionClass($this))->getMethods())
            ->reject(
                fn (ReflectionMethod $reflectionMethod): bool => \in_array($reflectionMethod->getName(), ['__construct', 'toArray'], true)
            )
            ->filter(
                fn (ReflectionMethod $reflectionMethod): bool => \in_array(
                    'public',
                    Reflection::getModifierNames($reflectionMethod->getModifiers()),
                    true
                )
            )
            ->mapWithKeys(fn (ReflectionMethod $reflectionMethod): array => [
                Str::snake($reflectionMethod->getName()) => $this->{$reflectionMethod->getName()}(),
            ])
            ->toArray();
    }
}
