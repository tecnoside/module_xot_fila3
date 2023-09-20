<?php

declare(strict_types=1);
/**
 * ----------------------------------------------------------------
 */

namespace Modules\Xot\Models\Policies;

use Exception;
use Modules\User\Models\Role;
use Modules\User\Models\User;
use Modules\Xot\Datas\XotData;
use Modules\User\Models\ModelHasRole;
use Illuminate\Database\QueryException;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Exceptions\RoleDoesNotExist;
use Modules\Xot\Actions\Model\GetTableIndexesByModelClassAction;
use Modules\Xot\Actions\Model\DeleteTableIndexByModelClassIndexNameAction;

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
                //try{
                    $role = Role::firstOrCreate(['name' => 'super-admin', 'team_id' => null]);
                //}catch(\Illuminate\Database\UniqueConstraintViolationException $e){
                    //app(DeleteTableIndexByModelClassIndexNameAction::class)->execute(Role::class,'roles_name_guard_name_unique');
                    //$indexes=app(GetTableIndexesByModelClassAction::class)->execute(Role::class);
                    //dddx(['indexes'=>$indexes,'e'=>$e]);
                //}
                $user->assignRole($role);
            } catch(QueryException $e){
                $indexes=app(GetTableIndexesByModelClassAction::class)->execute(ModelHasRole::class);
                

                foreach($indexes as $index){
                    dddx([
                        'getName'=>$index->getName(),
                        //'getFullQualifiedName'=>$index->getFullQualifiedName(), //Too few arguments to function 
                        //'getQuotedName'=>$index->getQuotedName(), Too few arguments to function 
                        'methods'=>get_class_methods($index)
                    ]);
                }

                dddx([
                    'message'=>$e->getMessage(),
                    'indexes'=>$indexes,
                    'e'=>$e,
                ]);
            }catch(\Illuminate\Database\UniqueConstraintViolationException $e){
                app(DeleteTableIndexByModelClassIndexName::class)->execute(Role::class,'roles_name_guard_name_unique');
                dddx($e);
            }catch(Exception $e){
                dddx($e);
            }
            

            return true;
        }

        return null;
    }
}