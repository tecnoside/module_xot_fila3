<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

/**
 * Modules\Xot\Models\Cache.
 *
 * @method static \Modules\Xot\Database\Factories\CacheFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cache  query()
 *
 * @mixin \Eloquent
 */
class Cache extends BaseModel
{
    protected $table = 'cache';

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'key',
        'value',
        'expiration',
    ];
}
