<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Appointment extends Model
{
    use SoftDeletes;

    public $table = 'Appointments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'date',
        'start_time',
        'End_time',
        'Patient_ID',
        'Doctor_ID',
        'Status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Patient_ID' => 'string',
        'Doctor_ID' => 'string',
        'Status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'required',
        'start_time' => 'required',
        'End_time' => 'required'
    ];
}
