<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','staff_id', 'email', 'password','profile_image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }


    public function project()
    {
       return $this->hasMany(Project::class);
    }

    public function task()
    {
       return $this->hasManyThrough(Task::class,Project::class);
    }


    public function company()
    {
       return $this->belongsTo(Company::class);
    }

    public function comment()
    {
       return $this->hasMany(User::class);
    }

    public function companyuser()
    {
        return $this->belongsTo(CompanyUser::class);

    }

    public function projectuser()
    {

        return $this->belongsTo(ProjectUser::class);

    }

    /**
     * Create Accessors and Mutators
     */
//    public function setNameAttribute($name)
//    {
//        /**
//         * Setting the Name into the Database
//         * This mean that Setting the name into the databse
//         * Will Equate to UpperCase into the Database
//         *
//         * Notice that whenever you are saving into the database,
//         * The first Letter of the name will be Capitalized
//         */
//        $this->attributes['name'] = ucfirst($name);
//    }
//
//    public function setEmailAttribute($email)
//    {
//        /**
//         * Set Email to Lower case characters before inserting into
//         * Database
//         */
//        $this->attributes['email'] = strtolower($email);
//    }
//
//    public function setPasswordAttribute($password)
//    {
//        /**
//         *  Hash the password then equate to password field in the
//         * Database
//         */
//        $this->attributes['password'] = Hash::make($password);
//    }
//
//    public function getNameAttribute($name)
//    {
//        /**
//         * Get the name and then convert the First Latter to Upper case Letter
//         */
//        return ucfirst($name);
//    }
//
//    public function getPasswordAttribute($password)
//    {
//        /**
//         * get password from the database
//         */
//
//        return $password;
//    }
}
