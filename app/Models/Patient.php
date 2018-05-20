<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Patient extends Model
{
    use SoftDeletes;

    public $table = 'patients';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Fname',
        'lname',
        'DoB',
        'Gender',
        'Country',
        'Address',
        'PostalCode',
        'City',
        'JMBG',
        'PhoneNumber',
        'Email',
        'Picture',
        'DentalRecord'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Fname' => 'string',
        'lname' => 'string',
        'Gender' => 'string',
        'Country' => 'string',
        'Address' => 'string',
        'PostalCode' => 'string',
        'City' => 'string',
        'JMBG' => 'string',
        'Email' => 'string',
        'PhoneNumber' => 'string',
        'Picture' => 'string',
        'DentalRecord' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Fname' => 'required',
        'lname' => 'required',
        'PhoneNumber' => 'required',
        'DoB' => 'required|date'
    ];

}
