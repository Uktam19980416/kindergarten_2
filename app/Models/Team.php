<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Team
 * @package App\Models
 * @version August 1, 2020, 5:50 am UTC
 *
 * @property string $images
 */
class Team extends Model
{
    use SoftDeletes;

    public $table = 'team';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'images',
        // 'name',
        // 'job'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'images' => 'string',
        // 'name' => 'string',
        // 'job' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'name' => 'required',
        // 'job' => 'required'
    ];

    
}
