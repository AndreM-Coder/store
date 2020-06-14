<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Repositories\BaseRepository;

/**
 * Class CartRepository
 * @package App\Repositories
 * @version June 14, 2020, 7:40 pm UTC
*/

class CartRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'product_id',
        'product_amount',
        'total'
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
        return Cart::class;
    }
}
