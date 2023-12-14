<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    /**
     * @var array<string>
     */
    public $fillable = [
        'id', 'appname', 'description', 'keywords', 'author',
    ];
}
