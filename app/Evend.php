<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest()
 */
class Evend extends Model
{
    use \App\Traits\Evend;

    /**
     *
     */

    protected $fillable = ['meter_num','amount','payment_type'];

    protected $hidden = ['id','created_at','updated_at','deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','staff_id');

    }

    public function getVendByMeterNumber(){
        return \App\Evend::where('meter_num',$this->meter_num)->get();
    }

    public function getVendByStaff()
    {
        return Evend::where('user_id', $this->user_id) -> get();
    }

    public function getVendByDate()
    {
        return Evend::where('created_at',$this -> created_at) -> get();
    }

}
