<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    public function invoiceLines()
    {
        return $this->hasMany('App\InvoiceLine');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

    public function total_amount()
    {
        $amount = 0;
        $invoiceLines = $this->invoiceLines->all();
        foreach($invoiceLines as $InvoiceLine)
        {
            $amount += $InvoiceLine->service->unitPrice * $InvoiceLine->quantity;
        }
        return $amount;
    }
}
