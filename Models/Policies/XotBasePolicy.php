<?php

declare(strict_types=1);
/**
 * ----------------------------------------------------------------
 */

namespace Modules\Xot\Models\Policies;

use Modules\User\Models\Role;
use Modules\User\Models\User;
use Modules\Xot\Datas\XotData;
use Modules\User\Models\ModelHasRole;
use Illuminate\Database\QueryException;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Exceptions\RoleDoesNotExist;
use Modules\Xot\Actions\Model\GetTableIndexesByModelClassAction;

// use Modules\Xot\Datas\XotData;

abstract class XotBasePolicy
{
    use HandlesAuthorization;

    public function before(User $user, string $ability): bool|null
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
            return true;
        }

        if ($user->email == $xotData->super_admin && null != $xotData->super_admin) {
            try {
                $user->assignRole('super-admin');
            } catch (RoleDoesNotExist) {
                $role = Role::firstOrCreate(['name' => 'super-admin', 'team_id' => null]);
                $user->assignRole($role);
            } catch(QueryException $e){
                $indexes=app(GetTableIndexesByModelClassAction::class)->execute(ModelHasRole::class);
                foreach($indexes as $index){
                    dddx([
                        'getName'=>$index->getName(),
                        'getQuotedName'=>$index->getQuotedName(),
                        'methods'=>get_class_methods($index)
                    ]);
                }

                dddx([
                    'message'=>$e->getMessage(),
                    'indexes'=>$indexes,
                    'e'=>$e,
                ]);
            }
            

            return true;
        }

        return null;
    }
}