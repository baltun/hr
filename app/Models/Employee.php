<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Employee
 * @package App\Models
 * @version February 4, 2022, 3:58 pm UTC
 *
 * @property string $lastName
 * @property string $firstName
 * @property string $middleName
 */
class Employee extends Model
{

    use HasFactory;

    public $table = 'employees';
    



    public $fillable = [
        'lastName',
        'firstName',
        'middleName'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'lastName' => 'string',
        'firstName' => 'string',
        'middleName' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
