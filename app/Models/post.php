<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class post
 * @package App\Models
 * @version January 4, 2018, 8:19 am UTC
 *
 * @property string name
 * @property string content
 */
class post extends Model
{

    public $table = 'posts';
    


    public $fillable = [
        'name',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content' => 'exit'
    ];

    
}
