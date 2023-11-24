<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;

/**
 * Modules\Xot\Models\CacheLock.
 *
 * @method static \Modules\Xot\Database\Factories\CacheLockFactory factory($count = null, $state = [])
 * @method static Builder|CacheLock                                newModelQuery()
 * @method static Builder|CacheLock                                newQuery()
 * @method static Builder|CacheLock                                query()
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
