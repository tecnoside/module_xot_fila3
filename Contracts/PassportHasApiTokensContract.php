<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Xot\Contracts;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Passport\PersonalAccessTokenResult;
use Laravel\Passport\Token;
use Laravel\Passport\TransientToken;

/**
 * @propery \Laravel\Passport\Token|\Laravel\Passport\TransientToken|null $accessToken;
 */
interface PassportHasApiTokensContract
{
     /**
     * Get all of the user's registered OAuth clients.
     *
<<<<<<< HEAD
     * @return HasMany
     */
=======
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

>>>>>>> ac01b6a (up)
    public function clients();

    /**
     * Get all of the access tokens for the user.
     *
<<<<<<< HEAD
     * @return HasMany
=======
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
>>>>>>> ac01b6a (up)
     */
    public function tokens();

    /**
     * Get the current access token being used by the user.
     *
     * @return \Laravel\Passport\Token|\Laravel\Passport\TransientToken|null
     */
    public function token();

    /**
     * Determine if the current API token has a given scope.
     *
<<<<<<< HEAD
     * @param string $scope
     *
=======
     * @param  string  $scope
>>>>>>> ac01b6a (up)
     * @return bool
     */
    public function tokenCan($scope);

    /**
     * Create a new personal access token for the user.
     *
<<<<<<< HEAD
     * @param string $name
     *
     * @return PersonalAccessTokenResult
     */
=======
     * @param  string  $name
     * @param  array  $scopes
     * @return \Laravel\Passport\PersonalAccessTokenResult
     */

>>>>>>> ac01b6a (up)
    public function createToken($name, array $scopes = []);

    /**
     * Set the current access token for the user.
     *
     * @return $this
     */
    public function withAccessToken(Token|TransientToken $accessToken);
}
