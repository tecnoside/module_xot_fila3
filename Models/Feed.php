<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;

// --- services
// --- TRAITS ---
/**
 * Modules\Xot\Models\Feed.
 *
 * @property int                             $id
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Modules\Xot\Database\Factories\FeedFactory factory($count = null, $state = [])
 * @method static Builder|Feed                                newModelQuery()
 * @method static Builder|Feed                                newQuery()
 * @method static Builder|Feed                                query()
 * @method static Builder|Feed                                whereCreatedAt($value)
 * @method static Builder|Feed                                whereCreatedBy($value)
 * @method static Builder|Feed                                whereId($value)
 * @method static Builder|Feed                                whereUpdatedAt($value)
 * @method static Builder|Feed                                whereUpdatedBy($value)
 *
 * @mixin \Eloquent
 */
class Feed extends BaseModel
{
    /**
     * @var array<int, string>
     */
    protected $fillable = ['id', 'created_at', 'updated_at'];
}
