<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeEducation extends Model
{
    use \App\Traits\EmployeeEducation;

    protected $table ='employee_education';
    protected $fillable = ['highest_education','descriptions'];
    protected $hidden = ['id','created_at','updated_at','deleted_at'];

    public function employee()
    {
        $this->hasMany(Employee::class);
    }

    public function user()
    {
       return $this->hasManyThrough(User::class, Employee::class, 'employee_education_id','staff_id');
    }

    public function itememployee()
    {
        return $this->hasManyThrough(ItemEmployee::class,Employee::class,'designation_id','staff_id');
    }




}
