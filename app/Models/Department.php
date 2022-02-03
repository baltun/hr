<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Department
 * @package App\Models
 * @version February 3, 2022, 4:01 pm UTC
 *
 * @property string $name
 */
class Department extends Model
{

    use HasFactory;

    public $table = 'departments';
    



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|unique'
    ];

    
}
