<?php

namespace App\Repositories;

use App\Models\Shopping;
use App\Repositories\BaseRepository;

/**
 * Class ShoppingRepository
 * @package App\Repositories
 * @version June 14, 2020, 7:39 pm UTC
*/

class ShoppingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'delivery_address',
        'total',
        'products_qty',
        'status',
        'delivery_date'
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
        return Shopping::class;
    }
}
