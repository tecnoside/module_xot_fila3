<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Modules\User\Models\Membership;
use Modules\User\Models\Team;
use Modules\User\Models\Tenant;
use Modules\User\Models\TenantUser;
use Modules\Xot\Contracts\ProfileContract;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

/**
 * Undocumented class.
 */
class XotData extends Data implements Wireable
{
    use WireableData;

    public string $main_module = '';

    // => 'Blog'
    public string $param_name = 'noset';

    public string $adm_home = '01';

    public ?string $adm_theme = ''; // ' => 'AdminLTE',
    // public bool $enable_ads;//' => '1',

    public string $primary_lang = 'it';

    // 'pub_theme' => 'DirectoryBs5',
    public string $pub_theme;

    // ' => 'One',
    public string $search_action = 'it/videos';

    public bool $show_trans_key = false;

    public string $register_type = '0';

    public string $verification_type = '';

    public bool $login_verified = false;

    public bool $disable_frontend_dynamic_route = false;

    public bool $disable_admin_dynamic_route = false;

    public bool $disable_database_notifications = true;

    public bool $register_adm_theme = false;

    public bool $register_pub_theme = false;

    public bool $register_collective = false;

    public string $team_class = Team::class; // = Team::class;

    public string $tenant_class = Tenant::class; // = Team::class;

    public string $membership_class = Membership::class; // = Membership::class;

    public string $tenant_pivot_class = TenantUser::class; // = Membership::class;

    public ?string $super_admin = null;

    public static function make(): self
    {
        /*
        $xot = config('xra');

        if (! \is_array($xot) || count($xot) < 3) {
            // *
            $path = TenantService::filePath('xra.php');
            $xot = File::getRequire($path);
            if (! \is_array($xot)) {
                $xot = [];
            }
        }
        */
        $data = TenantService::getConfig('xra');

        return self::from($data);
    }

    public function getUserClass(): string
    {
        Assert::classExists($class = config('auth.providers.users.model'), 'check config auth');

        return $class;
    }

    /**
     * @return class-string
     */
    public static function resolveUserClass(): string
    {
        // Assert class can be created
        $instance = static::make();

        Assert::classExists($res = $instance->getUserClass());

        return $res;
    }

    public function getTeamClass(): string
    {
        return $this->team_class;
    }

    /**
     * Undocumented function
     */
    public function getTenantClass(): string
    {
        return $this->tenant_class;
    }

    public function getTenantResourceClass(): string
    {
        // dddx($this->tenant_class); //Modules\Bimaticard\Models\Shop
        // desiderata  Modules\Bimaticard\Filament\Resources\ShopResource
        return Str::of($this->tenant_class)
            ->replace('\Models\\', '\Filament\Resources\\')
            ->append('Resource')
            ->toString();
    }

    public function getTenantPivotClass(): string
    {
        return $this->tenant_pivot_class;
    }

    public function getMembershipClass(): string
    {
        return $this->membership_class;
    }

    public function getProfileClass(): string
    {
        return 'Modules\\'.$this->main_module.'\Models\Profile';
    }

    public function getHomeController(): string
    {
        return 'Modules\\'.$this->main_module.'\Http\Controllers\HomeController';
    }

    public function getProfileModelByUserId(string $user_id): Model
    {
        $profileClass = $this->getProfileClass();
        $profile = app($profileClass);
        if (! in_array('user_id', $profile->getFillable())) {
            throw new \Exception('add user_id to fillable on class '.$profileClass);
        }

        $res = $profile->firstOrCreate(['user_id' => $user_id]);

        return $res;
    }

    public function getProfileModel(): Model&ProfileContract
    {
        $user_id = (string) Filament::auth()->id();

        return $this->getProfileModelByUserId($user_id);
    }

    public function update(array $data): self
    {
        foreach ($data as $k => $v) {
            $this->{$k} = $v;
        }

        // $this->save();
        return $this;
    }

    public function save(): void
    {
        dddx('wip');
    }
}
