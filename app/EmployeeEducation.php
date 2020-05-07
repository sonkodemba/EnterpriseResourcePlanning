<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeEducation extends Model
{
    //
    protected $table ='employee_education';
    protected $fillable = ['highest_education','descriptions'];
    protected $hidden = ['id','created_at','updated_at','deleted_at'];

    public function employee()
    {
        $this->hasMany(Employee::class);
    }

    public function user()
    {
       return $this->hasManyThrough(User::class, Employee::class);
    }

    public function project()
    {
        return $this->hasManyThrough(Project::class, Employee::class);


    }

    public function task()
    {
        return $this->hasManyThrough(Task::class, Employee::class);

    }
}
