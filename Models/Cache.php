<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;

/**
 * Modules\Xot\Models\Cache.
 *
 * @method static \Modules\Xot\Database\Factories\CacheFactory factory($count = null, $state = [])
 * @method static Builder|Cache                                newModelQuery()
 * @method static Builder|Cache                                newQuery()
 * @method static Builder|Cache                                query()
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
