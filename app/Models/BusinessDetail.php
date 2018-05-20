<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class BusinessDetail extends Model
{

    public $table = 'businessDetails';
    


    public $fillable = [
        'name',
        'phone',
        'location',
        'zip',
        'country',
        'email',
        'numberID',
        'numberPDV',
        'owner',
        'RegistrationDate',
        'City'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'phone' => 'string',
        'location' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'email' => 'string',
        'numberID' => 'integer',
        'numberPDV' => 'integer',
        'owner' => 'string',
        'City' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'numberID' => 'required',
        'numberPDV' => 'required',
        'owner' => 'required'
    ];
}
