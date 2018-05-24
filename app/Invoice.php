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
            $amount += $InvoiceLine->amount();
        }
        return $amount;
    }

    public function amount_with_tax()
    {
        return round($this->total_amount() / (1 - $this->tax_rate()/100), 2);
    }

    public function tax()
    {
        return round($this->amount_with_tax() * $this->tax_rate()/100, 2);
    }

    public function tax_rate()
    {
        return 17;
    }

    public function currency()
    {
        return "KM";
    }

}
