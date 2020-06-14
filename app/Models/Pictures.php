<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Pictures
 * @package App\Models
 * @version June 3, 2020, 1:42 pm UTC
 *
 * @property integer $user_id
 * @property string $name
 * @property string $path
 * @property integer $type
 * @property integer $status
 */
class Pictures extends Model
{

    public $table = 'image';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $typeArray = [1=>'Meme', 2=>'Picture', 3=>'Meme Picture' ];
    
    public $statusArray = [0=> 'Active', 1 => 'Inactive'];


    public $fillable = [
        'user_id',
        'name',
        'path',
        'type',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'path' => 'string',
        'type' => 'integer',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'path' => 'required',
        'type' => 'required',
        'status' => 'required'
    ];

    
    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }

    
}
