<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }


    public function task()
    {
        return $this->hasMany(Task::class);
    }


}
