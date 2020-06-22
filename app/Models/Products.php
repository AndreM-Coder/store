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

    const CURRENCY = '<i class="fas fa-euro-sign"></i>';

    public $fillable = [
        'product_id',
        'product_name',
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
        'product_name' => 'string',
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
        'product_name' => 'required',
        'category_id' => 'required',
        'description' => 'required',
        'price' => 'required',
        'stock' => 'required'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id' );
    }

    public function priceWdiscount($price, $discount) {
        
        $total = $price - ($price * ($discount / 100));
        return $total;
        
    }
    
}
