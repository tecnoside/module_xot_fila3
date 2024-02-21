<?php

// senza la document delle property phpstan da errore per proprieta' mancante

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Filament\Models\Contracts\FilamentUser;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Passport\Token;
use Modules\User\Contracts\HasTeamsContract;
use Spatie\Permission\Contracts\Role;

// use Filament\Models\Contracts\HasTenants;

/**
 * Modules\User\Contracts\UserContract.
 *
 * @property ModelProfileContract|null                   $profile
 * @property int                                         $id
 * @property string                                      $handle
 * @property string|null                                 $first_name
 * @property string|null                                 $last_name
 * @property string|null                                 $full_name
 * @property string|null                                 $current_team_id
 * @property string|null                                 $phone
 * @property string|null                                 $email
 * @property Collection|array<\Modules\User\Models\Area> $areas
 * @property \Modules\User\Models\PermUser|null          $perm
 *
 * @mixin \Eloquent
 */
interface UserContract extends CanResetPassword, FilamentUser, HasTeamsContract, ModelContract, MustVerifyEmail, PassportHasApiTokensContract
{
    /*
    public function isSuperAdmin();
    public function name();
    public function areas();
    public function avatar();
    */
    public function profile(): HasOne;

    /**
     * Update the model in the database.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return bool
     */
    public function update(array $attributes = [], array $options = []);
=======
     * @param  array  $attributes
     * @param  array  $options
     * @return bool
     */
>>>>>>> db2684d (up)

=======
     * @return bool
     */
>>>>>>> 714a726 (Check & fix styling)
    public function update(array $attributes = [], array $options = []);

    /**
     * Get a relationship.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $key
     *
     * @return mixed|null
=======
     * @param  string  $key
     * @return mixed
>>>>>>> db2684d (up)
=======
     * @param string $key
>>>>>>> 714a726 (Check & fix styling)
     */
    public function getRelationValue($key);

    /**
     * Create a new instance of the given model.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array $attributes
     * @param bool  $exists
     *
=======
     * @param  array  $attributes
     * @param  bool  $exists
>>>>>>> db2684d (up)
=======
     * @param array $attributes
     * @param bool  $exists
     *
>>>>>>> 714a726 (Check & fix styling)
     * @return static
     */
    public function newInstance($attributes = [], $exists = false);

    /**
     * Get the value of the model's primary key.
     *
     * @return mixed|int|string
     */
    public function getKey();

    /**
     * Determine if the model has (one of) the given role(s).
     */
    public function hasRole(string|int|array|Role|\Illuminate\Support\Collection $roles, ?string $guard = null): bool;

    /**
     * Assign the given role to the model.
     *
     * @return $this
     */
    public function assignRole(array|string|int|Role|\Illuminate\Support\Collection $roles = []);

    /*
     * Get the current access token being used by the user.
     *
     * @return \Laravel\Passport\Token|\Laravel\Passport\TransientToken|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    // public function token();
=======
    //public function token();
>>>>>>> db2684d (up)
=======
    // public function token();
>>>>>>> 714a726 (Check & fix styling)

    /**
     * A model may have multiple roles.
     */
    public function roles(): BelongsToMany;
}
