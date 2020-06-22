<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Cart
 * @package App\Models
 * @version June 14, 2020, 7:40 pm UTC
 *
 * @property integer $user_id
 * @property integer $product_id
 * @property integer $product_amount
 * @property number $total
 */
class Cart extends Model
{

    public $table = 'cart';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'user_id',
        'product_id',
        'product_amount',
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'product_id' => 'integer',
        'product_amount' => 'integer',
        'total' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'product_id' => 'required',
        'product_amount' => 'required',
        'total' => 'required'
    ];

    public function user() {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }

    public function product() {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }
    

}
