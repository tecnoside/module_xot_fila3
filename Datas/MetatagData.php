<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Filament\Support\Colors\Color;
use Illuminate\Support\Arr;
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;

/**
 * Undocumented class.
 */
class MetatagData extends Data implements Wireable
{
    use WireableData;

    public string $title;

    // ' => 'EWall',
    public string $sitename;

    // ' => 'the best place',
    public string $subtitle;

    // ' => 'Find restaurants, specials, and coupons for free',
    public ?string $generator = 'xot';

    // ' => '',
    public string $charset = 'UTF-8';

    public ?string $author = 'xot';

    // ' => '',
    public ?string $description;

    // ' => '',
    public ?string $keywords;

    // ' => '',
    public string $nome_regione;

    // ' => '',
    public string $nome_comune;

    // ' => '',
    public string $site_title;

    // ' => '',
    public string $logo;

    // ' => 'ewall::img/logo.png',
    public string $logo_square;

    // ' => 'ewall::img/logo.png',
    public string $logo_header;

    public string $logo_header_dark;

    public ?string $logo_height = '2em';

    // = 'xot::img/logo.png';
    public string $logo_footer;

    // ' => 'ewall::img/logo.png',
    public string $logo_alt;

    // ' => 'Logo',
    public string $hide_megamenu;

    // ' => false,
    public string $hero_type;

    // ' => 'with_megamenu_bottom',
    public string $facebook_href;

    // ' => 'aa',
    public string $twitter_href;

    // ' => '',
    public string $youtube_href;

    // ' => '',
    public string $fastlink;

    // ' => false,
    public string $color_primary;

    // ' => '#0071b0',
    public string $color_title;

    // ' => 'white',
    public string $color_megamenu;

    // ' => '#d60021',
    public string $color_hamburger;

    // ' => '#000',
    public string $color_banner;

    // ' => '#000',
    public string $favicon = '/favicon.ico';

    public array $colors = [];

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! self::$instance) {
            $data = TenantService::getConfig('metatag');
            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    public function getLogoHeader(): string
    {
        return asset(app(\Modules\Xot\Actions\File\AssetAction::class)->execute($this->logo_header));
    }

    public function getLogoHeaderDark(): string
    {
        return asset(app(\Modules\Xot\Actions\File\AssetAction::class)->execute($this->logo_header_dark));
    }

    public function getLogoHeight(): string
    {
        if (null == $this->logo_height) {
            $this->logo_height = '2em';
        }

        return $this->logo_height;
    }

    public function getFavicon(): string
    {
        return app(\Modules\Xot\Actions\File\AssetAction::class)->execute($this->favicon);
    }

    public function getFilamentColors(): array
    {
        return [
            'danger' => 'danger',
            'gray' => 'gray',
            'info' => 'info',
            'primary' => 'primary',
            'success' => 'success',
            'warning' => 'warning',
        ];
    }

    public function getAllColors(): array
    {
        $colors = array_keys(Color::all());
        $colors = array_combine($colors, $colors);

        return $colors;
    }

    public function getColors(): array
    {
        $mapped = Arr::mapWithKeys(
            $this->colors,
            function (array $item, int|string $key): array {
                $k = $item['key'];
                $v = $item['color'];
                if ('custom' != $v) {
                    $v = Arr::get(Color::all(), $v);
                }
                if ('custom' == $v) {
                    $v = Color::hex($item['hex']);
                }

                return [$k => $v];
            }
        );

        return $mapped;
        /*
        return [
            // 'primary' => Color::Amber,
            'primary' => Color::Blue,
        ];
        */
    }
}
