<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Products
 * @package App\Models
 * @version June 14, 2020, 7:38 pm UTC
 *
 * @property integer $product_id
 * @property integer $category_id
 * @property string $description
 * @property number $price
 * @property integer $stock
 */
class Products extends Model
{

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'product_id',
        'category_id',
        'description',
        'price',
        'stock'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'category_id' => 'integer',
        'description' => 'string',
        'price' => 'float',
        'stock' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required',
        'category_id' => 'required',
        'description' => 'required',
        'price' => 'required',
        'stock' => 'required'
    ];

    
}
