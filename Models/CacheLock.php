<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

/**
 * Modules\Xot\Models\CacheLock.
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CacheLock  query()
 *
 * @mixin \Eloquent
 */
class CacheLock extends BaseModel
{
    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'key',
        'owner',
        'expiration',
    ];
}
