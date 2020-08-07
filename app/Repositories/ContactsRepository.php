<?php

namespace App\Repositories;

use App\Models\Contacts;
use App\Repositories\BaseRepository;

/**
 * Class ContactsRepository
 * @package App\Repositories
 * @version August 1, 2020, 5:54 am UTC
*/

class ContactsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'mail',
        'message'
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
        return Contacts::class;
    }
}
