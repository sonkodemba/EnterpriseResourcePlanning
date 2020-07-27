<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1, $staff_id)
 */
class CashDepositeSlip extends Model
{
    //
protected $table = 'cash_deposite_slips';

    protected $fillable = [ 'bank_id','account_num','account_holder_name','curency_type','amount','depositor_id'];
    protected $hidden = ['id','created_at','updated_at','deleted_at'];


    public function bank()
    {
        return $this->belongsTo(Bank::class,'bank_id');
    }

    public function getDeposites()
    {
        return CashDepositeSlip::where('bank_id',$this -> bank_id) -> get();
    }

}
