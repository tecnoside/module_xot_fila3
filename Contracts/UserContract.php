<?php

// senza la document delle property phpstan da errore per proprieta' mancante

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Laravel\Passport\TransientToken;
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
 * @mixin    \Eloquent
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
     * Undocumented function.
     *
     * @return bool
     */
    public function update(array $attributes = [], array $options = []);

    /**
     * Get a relationship.
     *
     * @param string $key
     *
     * @return mixed|void
     */
    public function getRelationValue($key);

    /**
     * Undocumented function.
     *
     * @return Model
     */
    public function newInstance();

    /**
     * Summary of getKey.
     *
     * @return string|int
     */
    public function getKey();

    /**
     * Determine if the model has (one of) the given role(s).
     *
     * @param string|int|array|Role|\Illuminate\Support\Collection $roles
     */
    public function hasRole($roles, string $guard = null): bool;

    /**
     * Assign the given role to the model.
     *
     * @param array|string|int|Role|\Illuminate\Support\Collection ...$roles
     *
     * @return $this
     */
    public function assignRole(array $roles = []);

    /**
     * Get the current access token being used by the user.
     *
     * @return Token|TransientToken|null
     */
    public function token();

    /**
     * A model may have multiple roles.
     */
    public function roles(): BelongsToMany;
}
