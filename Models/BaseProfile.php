<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

// use Illuminate\Database\Eloquent\Relations\HasOne;
use Parental\HasChildren;
use Modules\User\Models\Role;
use Modules\User\Models\User;
use Modules\User\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Collection;
use Modules\User\Models\Traits\IsProfileTrait;
use Spatie\SchemalessAttributes\SchemalessAttributesTrait;
use Spatie\SchemalessAttributes\Casts\SchemalessAttributes;

/**
 * Modules\Xot\Models\Profile.
 *
 * @property Collection<int, Permission> $permissions
 * @property int|null                    $permissions_count
 * @property Collection<int, Role>       $roles
 * @property int|null                    $roles_count
 * @property User|null                   $user
 *
 * @method static \Modules\Xot\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static Builder|Profile                                newModelQuery()
 * @method static Builder|Profile                                newQuery()
 * @method static Builder|Profile                                permission($permissions)
 * @method static Builder|Profile                                query()
 * @method static Builder|Profile                                role($roles, $guard = null)
 *
 * @property int                         $id
 * @property string|null                 $type
 * @property string|null                 $first_name
 * @property string|null                 $last_name
 * @property string|null                 $full_name
 * @property string|null                 $email
 * @property Carbon|null                 $created_at
 * @property Carbon|null                 $updated_at
 * @property string|null                 $user_id
 * @property string|null                 $updated_by
 * @property string|null                 $created_by
 * @property Carbon|null                 $deleted_at
 * @property string|null                 $deleted_by
 * @property int                         $is_active
 * @property Collection<int, Permission> $permissions
 * @property int|null                    $permissions_count
 * @property Collection<int, Role>       $roles
 * @property int|null                    $roles_count
 * @property User|null                   $user
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes   $extra
 *
 * @method static \Modules\Xot\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static Builder|Profile                                newModelQuery()
 * @method static Builder|Profile                                newQuery()
 * @method static Builder|Profile                                permission($permissions)
 * @method static Builder|Profile                                query()
 * @method static Builder|Profile                                role($roles, $guard = null)
 * @method static Builder|Profile                                whereCreatedAt($value)
 * @method static Builder|Profile                                whereCreatedBy($value)
 * @method static Builder|Profile                                whereDeletedAt($value)
 * @method static Builder|Profile                                whereDeletedBy($value)
 * @method static Builder|Profile                                whereEmail($value)
 * @method static Builder|Profile                                whereFirstName($value)
 * @method static Builder|Profile                                whereFullName($value)
 * @method static Builder|Profile                                whereId($value)
 * @method static Builder|Profile                                whereIsActive($value)
 * @method static Builder|Profile                                whereLastName($value)
 * @method static Builder|Profile                                whereType($value)
 * @method static Builder|Profile                                whereUpdatedAt($value)
 * @method static Builder|Profile                                whereUpdatedBy($value)
 * @method static Builder|Profile                                whereUserId($value)
 * @method static Builder|Profile                                withoutPermission($permissions)
 * @method static Builder|Profile                                withoutRole($roles, $guard = null)
 *
 * @mixin \Eloquent
 */
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
