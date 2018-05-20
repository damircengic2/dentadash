<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Service extends Model
{

    public $table = 'Services';
    


    public $fillable = [
        'name',
        'unitPrice',
        'EntryCost',
        'Unit'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'unitPrice' => 'float',
        'EntryCost' => 'float',
        'Unit' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'unitPrice' => 'required'
    ];
}
