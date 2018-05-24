<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceLine extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['invoice_id', 'service_id', 'quantity'];

    public function invoice()
    {
        return $this->belongsTo('App\Invoice');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

    public function amount()
    {
        $amount = $this->service->unitPrice * $this->quantity;
        return $amount;
    }

}
