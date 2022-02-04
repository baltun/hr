<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Employee
 * @package App\Models
 * @version February 4, 2022, 5:25 pm UTC
 *
 * @property \App\Models\Department $department
 * @property string $lastName
 * @property string $firstName
 * @property string $middleName
 * @property integer $department_id
 */
class Employee extends Model
{

    use HasFactory;

    public $table = 'employees';
    



    public $fillable = [
        'lastName',
        'firstName',
        'middleName',
        'department_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'lastName' => 'string',
        'firstName' => 'string',
        'middleName' => 'string',
        'department_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id', 'id');
    }
}
