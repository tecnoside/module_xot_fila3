<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

final class CacheLock extends BaseModel
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'key',
        'owner',
        'expiration',
    ];
}
