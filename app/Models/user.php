<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class user
 * @package App\Models
 * @version January 3, 2018, 6:54 am UTC
 *
 * @property string name
 * @property string email
 * @property string password
 * @property string remember_token
 */
class user extends Model
{

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
