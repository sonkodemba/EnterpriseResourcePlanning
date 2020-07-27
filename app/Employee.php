<?php

namespace App;

use App\Traits\Employees;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use Employees;
    /**
     * @var string use Accessor and Mutator
     */

    protected $table  = 'employees';
    protected $fillable = ['name','staff_id','email','image','address','telephone_num'];
    protected $hidden =['created_at','updated_at','deleted_at'];

    public function itememployee()
    {
        return $this->hasMany(ItemEmployee::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id');
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function education()
    {
        return $this->belongsTo(EmployeeEducation::class);

    }

    public function employmentcategory()
    {
        return $this->belongsTo(EmploymentCategory::class);
    }

    public function evend()
    {
        $this->hasManyThrough(Evend::class, Employee::class,'staff_id','user_id');
    }

    public function collector()
    {
        return $this->hasManyThrough(CashCollection::class,User::class,'staff_id','staff_d');
    }

}
