<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class EmploymentCategory extends Model
{
    use \App\Traits\EmploymentCategory;


    protected $table = 'employment_categories';

    protected $fillable = ['name', 'descriptions'];

    protected $hidden = ['id', 'created_at','deleted_at', 'updated_at'];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function user()
    {
        return $this->hasManyThrough(User::class, Employee::class,'employmentCategory_id','staff_id');
    }

    public function itememployee()
    {
        $this->hasManyThrough(ItemEmployee::class,Employee::class, 'employmentCategory_id','staff_id');
    }

}
