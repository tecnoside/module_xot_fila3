<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

// use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Models\Traits\IsProfileTrait;
use Parental\HasChildren;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;
use Spatie\SchemalessAttributes\Casts\SchemalessAttributes;
use Spatie\SchemalessAttributes\SchemalessAttributesTrait;

abstract class BaseProfile extends BaseModel implements ProfileContract
{
    use HasChildren;
    use HasRoles;
    use IsProfileTrait;
    use Notifiable;
    use InteractsWithMedia;
    use SchemalessAttributesTrait;

    /**
     * Undocumented variable.
     * Property Modules\Xot\Models\Profile::$guard_name is never read, only written.
     */
    // private string $guard_name = 'web';

    /** @var array<int, string> */
    protected $fillable = [
        'id',
        'user_id',
        'type',
        'first_name',
        'last_name',
        'phone',
        'email',
        'bio',
        'is_active',
    ];

    protected $appends = [
        'full_name',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'updated_by' => 'string',
        'created_by' => 'string',
        'deleted_by' => 'string',

        'is_active' => 'boolean',
        'extra' => SchemalessAttributes::class,
    ];

    /** @var array */
    protected $schemalessAttributes = [
        'extra',
    ];

    public function scopeWithExtraAttributes(): Builder
    {
        return $this->extra->modelScope();
    }
}
