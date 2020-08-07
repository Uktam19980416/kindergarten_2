<?php

namespace App\Repositories;

use App\Models\Gallery;
use App\Repositories\BaseRepository;

/**
 * Class GalleryRepository
 * @package App\Repositories
 * @version August 1, 2020, 5:52 am UTC
*/

class GalleryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'images',
        'title'
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
        return Gallery::class;
    }
}
