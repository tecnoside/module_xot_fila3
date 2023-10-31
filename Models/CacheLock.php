<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

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
