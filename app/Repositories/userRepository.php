<?php

namespace App\Repositories;

use App\Models\user;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class userRepository
 * @package App\Repositories
 * @version January 3, 2018, 6:54 am UTC
 *
 * @method user findWithoutFail($id, $columns = ['*'])
 * @method user find($id, $columns = ['*'])
 * @method user first($columns = ['*'])
*/
class userRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return user::class;
    }
}
