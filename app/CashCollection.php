<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashCollection extends Model
{
    //
    protected $fillable = ['cashier_id','machine_id','shift_num','collector_id','amount_to_reversed','amount_collected','amount_to_bank'];

    protected $hidden = ['id','created_at','deleted_at','updated-at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function getCollectionByCashier()
    {
        return CashCollection::where('cashier_id', $this -> cashier_id)-> get();
    }
}
