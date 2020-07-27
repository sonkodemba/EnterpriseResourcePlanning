<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1, $id)
 */
class Bank extends Model
{
    //
    protected $fillable = ['code','name','account_ref','account_num','descriptions'];

    protected $hidden = ['id', 'created_at','deleted_at','updated_at'];

    public function cash_deposites()
    {
         return $this->hasMany(CashDepositeSlip::class,'bank_id');
    }



}
