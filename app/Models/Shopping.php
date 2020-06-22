<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Shopping
 * @package App\Models
 * @version June 14, 2020, 7:39 pm UTC
 *
 * @property integer $user_id
 * @property string $delivery_address
 * @property number $total
 * @property integer $products_qty
 * @property integer $status
 * @property string|\Carbon\Carbon $delivery_date
 */
class Shopping extends Model
{

    public $table = 'shopping';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $purchaseStatus = [0 => 'In Preparation', 1 => 'Shipped', 2 => 'Delivered'];

    public $fillable = [
        'user_id',
        'delivery_address',
        'total',
        'products_qty',
        'status',
        'delivery_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'delivery_address' => 'string',
        'total' => 'float',
        'products_qty' => 'integer',
        'status' => 'integer',
        'delivery_date' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'delivery_address' => 'required',
        'total' => 'required',
        'products_qty' => 'required',
        'status' => 'required',
        'delivery_date' => 'required'
    ];

    public function user() {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }

    public function getStatus(){
        return $this->purchaseStatus[$this->status];
    }
    
}
