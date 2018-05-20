<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class DentalChart extends Model
{
    use SoftDeletes;

    public $table = 'dentalCharts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'X_images',
        'Medication',
        'Allergies',
        'Notes',
        'complaints'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'X_images' => 'string',
        'Medication' => 'string',
        'Allergies' => 'string',
        'Notes' => 'string',
        'complaints' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
