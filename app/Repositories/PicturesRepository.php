<?php

namespace App\Repositories;

use App\Models\Pictures;
use App\Repositories\BaseRepository;

/**
 * Class PicturesRepository
 * @package App\Repositories
 * @version June 3, 2020, 1:42 pm UTC
*/

class PicturesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'name',
        'path',
        'type',
        'status'
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
        return Pictures::class;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }



}
