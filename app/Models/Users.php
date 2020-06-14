<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Users
 * @package App\Models
 * @version June 3, 2020, 11:00 am UTC
 *
 * @property string $name
 * @property boolean $is_admin
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class Users extends Model
{

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public  $isAdmin = [0 => 'No', 1=> 'Yes'];

    public $fillable = [
        'name',
        'is_admin',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'is_admin' => 'boolean',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'is_admin' => 'required',
        'email' => 'required'
    ];

    public function isAdmin() {
        return $this->isAdmin[$this->is_admin];
    }
    
}
