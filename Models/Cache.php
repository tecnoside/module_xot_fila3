<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

final class Cache extends BaseModel
{
    protected $table = 'cache';

    /**
     * @var string[]
     */
    protected $fillable = [
        'key',
        'value',
        'expiration',
    ];
}
