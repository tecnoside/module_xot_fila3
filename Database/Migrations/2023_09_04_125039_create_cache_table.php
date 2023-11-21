<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Undocumented class.
 */
class CreateCacheTable extends XotBaseMigration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
<<<<<<< HEAD
            static function (Blueprint $table): void {
=======
            function (Blueprint $table) : void {
>>>>>>> 6501a31 (up)
                $table->string('key')->primary();
                $table->mediumText('value');
                $table->integer('expiration');
            }
        );
    }
}
