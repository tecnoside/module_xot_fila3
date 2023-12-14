<?php

declare(strict_types=1);

/**
 * @see https://github.com/paulvl/backup/blob/master/src/Console/Commands/MysqlDump.php
 */

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Nwidart\Modules\Facades\Module;

<<<<<<< HEAD
class GenerateFormCommand extends Command
{
=======
class GenerateFormCommand extends Command {
>>>>>>> 2934d64 (.)
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xot:generate-form {module}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fill form with inputs';

    /**
     * Create a new command instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct()
    {
=======
    public function __construct() {
>>>>>>> 2934d64 (.)
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
<<<<<<< HEAD
    public function handle(): void
    {
=======
    public function handle(): void {
>>>>>>> 2934d64 (.)
        $module_name = $this->argument('module');
        $module_path = Module::getModulePath($module_name);
        if (! Str::endsWith($module_path, '/')) {
            $module_path .= '/';
        }
        $filament_resources_path = $module_path.'Filament/Resources';

        $this->info($module_name); // = Progressioni
        $this->info($module_path); // = /var/www/html/ptvx/laravel/Modules/Progressioni/
        $this->info($filament_resources_path);

        $files = File::files($filament_resources_path);
        foreach ($files as $file) {
            app(\Modules\Xot\Actions\Filament\GenerateFormByFileAction::class)->execute($file);
        }
    }
}
