<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{



    public function project()
    {
        $this->hasMany(Project::class);
    }

    public function task()
    {
      return  $this->hasManyThrough(Task::class,Project::class);
    }



}
