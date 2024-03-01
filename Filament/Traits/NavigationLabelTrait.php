<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

use Modules\Xot\Actions\GetTransKeyAction;
use Webmozart\Assert\Assert;

trait NavigationLabelTrait
{
    public static function trans(string $key): string
    {
        $transKey = app(GetTransKeyAction::class)->execute(static::class);
        $tmp = $transKey.'.'.$key;
        $res = trans($tmp);
        if (\is_string($res)) {
            return $res;
        }

        return 'fix:'.$tmp;
    }

    public static function getModelLabel(): string
    {
        return static::trans('navigation.name');
    }

    public static function getPluralModelLabel(): string
    {
        return static::trans('navigation.plural');
    }

    public static function getNavigationLabel(): string
    {
        return static::trans('navigation.plural');
    }

    public static function getNavigationGroup(): string
    {
        return static::trans('navigation.group.name');
    }

    public static function getPluralLabel(): string
    {
        return static::trans('navigation.plural');
    }

    public static function getLabel(): string
    {
        return static::trans('navigation.name');
    }

    public function getTitle(): string
    {
        return static::trans('navigation.name');
    }
}

/*
public static function transPath(string $key): string
    {
        $moduleNameLow = Str::lower(static::getModuleName());
        // $modelClass = static::$model ?? static::getModel();
        $modelClass = static::getModel();
        Assert::notNull($modelClass,'['.__LINE__.']['.__FILE__.']');
        $modelNameSlug = Str::kebab(class_basename($modelClass));

        return $moduleNameLow.'::'.$modelNameSlug.'.'.$key;
    }

    public static function trans(string $key): string
    {
        $res = __(static::transPath($key));
        if (\is_array($res)) {
            throw new \Exception('fix lang ['.$key.']');
        }

        return $res;
    }
*/
