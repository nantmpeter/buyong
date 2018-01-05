<?php

namespace App\Repositories;

use App\Models\post;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class postRepository
 * @package App\Repositories
 * @version January 4, 2018, 8:19 am UTC
 *
 * @method post findWithoutFail($id, $columns = ['*'])
 * @method post find($id, $columns = ['*'])
 * @method post first($columns = ['*'])
*/
class postRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'content'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return post::class;
    }
}
