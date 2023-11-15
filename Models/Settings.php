<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Modules\Xot\Models\Settings.
 *
 * @property int $id
 * @property string $appname
 * @property string $description
 * @property string $created_by
 * @property string $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Settings newModelQuery()
 * @method static Builder|Settings newQuery()
 * @method static Builder|Settings query()
 * @method static Builder|Settings whereAppname($value)
 * @method static Builder|Settings whereCreatedAt($value)
 * @method static Builder|Settings whereCreatedBy($value)
 * @method static Builder|Settings whereDescription($value)
 * @method static Builder|Settings whereId($value)
 * @method static Builder|Settings whereUpdatedAt($value)
 * @method static Builder|Settings whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Settings extends Model
{
    /**
     * @var array<string>
     */
    public $fillable = [
        'id', 'appname', 'description', 'keywords', 'author',
    ];
}
