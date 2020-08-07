<?php

namespace App\Repositories;

use App\Models\Team;
use App\Repositories\BaseRepository;

/**
 * Class TeamRepository
 * @package App\Repositories
 * @version August 1, 2020, 5:50 am UTC
*/

class TeamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'images',
        'name',
        'job'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Team::class;
    }
}
