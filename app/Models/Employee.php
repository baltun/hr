<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Employee
 * @package App\Models
 * @version February 4, 2022, 11:33 pm UTC
 *
 * @property \App\Models\Position $position
 * @property string $lastName
 * @property string $firstName
 * @property string $middleName
 * @property integer $position_id
 */
class Employee extends Model
{

    use HasFactory;

    public $table = 'employees';




    public $fillable = [
        'lastName',
        'firstName',
        'middleName',
        'position_id'
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
        'position_id' => 'integer'
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
    public function position()
    {
        return $this->belongsTo(\App\Models\Position::class, 'position_id', 'id');
    }

    public function departments()
    {
        return $this->belongsToMany(\App\Models\Department::class);
    }
}
