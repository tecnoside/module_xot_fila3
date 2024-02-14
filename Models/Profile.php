<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

// use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\Permission;
use Modules\User\Models\Role;
use Modules\User\Models\User;
use Modules\Xot\Contracts\ModelProfileContract;
use Modules\Xot\Contracts\ModelWithUserContract;
use Spatie\Permission\Traits\HasRoles;

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
class Profile extends BaseModel implements ModelProfileContract, ModelWithUserContract
{
    // spatie
    use HasRoles;

    // use HasTags; //non serve

    /**
     * Undocumented variable.
     * Property Modules\Xot\Models\Profile::$guard_name is never read, only written.
     */
    // private string $guard_name = 'web';

    /**
     * @var array<int, string>
     */
    protected array $fillable = ['id', 'user_id'];

    /*
     * Undocumented function.
     */
    public function user(): BelongsTo
    {
        // $user = TenantService::model('user'); //no bisgna guardare dentro config(auth  etc etc
        // $user_class = \get_class($user);
        $userClass = getUserClass();

        return $this->belongsTo($userClass);
    }
}
