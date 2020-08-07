<?php

namespace App\Repositories;

use App\Models\About;
use App\Repositories\BaseRepository;

/**
 * Class AboutRepository
 * @package App\Repositories
 * @version August 1, 2020, 5:49 am UTC
*/

class AboutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'who_we_are',
        'what_we_do',
        'images',
        'title',
        'description'
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
        return About::class;
    }
}
