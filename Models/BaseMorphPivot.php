<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseMorphPivot.
 */
abstract class BaseMorphPivot extends MorphPivot
{
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
<<<<<<< HEAD
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /**
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var bool
     */
=======
     * @var bool
*/
    public static $snakeAttributes = true;

    /**
* @var bool
*/
public $incrementing = true;

    /**
* @var bool
*/
>>>>>>> ac01b6a (up)
    public $timestamps = true;

    /**
     * @var int
     */
    protected $perPage = 30;

    protected $connection = 'mysql'; // this will use the specified database connection

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [];

    /**
<<<<<<< HEAD
     * @var string
     */
    protected $primaryKey = 'id';
=======
* @var string
*/
protected $primaryKey = 'id';
>>>>>>> ac01b6a (up)

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'related_type',
        'user_id',
        'note',
    ];

    protected $casts = ['created_at' => 'datetime', 'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
}
