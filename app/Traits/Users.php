<?php


namespace App\Traits;


trait Users
{

    /**
     ********************************************************************************
     * On the other hand, the @accessor allows you to alter data after              *
     * it's fetched from a database                                                 *
     *                                                                              *
     ********************************************************************************
    /**
     * @param $name
     * @return string
     */
    public function getNameAttribute($name)
    {
        return ucfirst($name);
    }

    /**
     * @param $staffid
     * @return mixed
     */
    public function getStaffIdAttribute($staffid)
    {
        return $staffid;
    }

    /**
     * @param $username
     * @return string
     */
    public function getUsernameAttribute($username)
    {
        return strtolower($username);
    }

    /**
     * @param $email
     * @return string
     */
    public function getEmailAttribute($email)
    {
        return strtolower($email);
    }




    /**
     * ***************************************************************************
     * Alter Data from a form before its save into the Database.
     * The @mutator allows you to alter  data before it's saved to a database.
     ***************************************************************************
     * @param $name
     * @return mixed
     */


    public function setNameAttribute($name)
    {
        return $this -> attributes['name'] = $name;
    }


    /**
     * @param $staffid
     * @return mixed
     */
    public function setStaffIdAttribute($staffid)
    {
        return $this -> attributes['staff_id'] = $staffid;
    }

    /**
     * @param $email
     * @return mixed
     */
    public function setEmailAttribute($email)
    {
        return $this -> attributes['email'] = $email;
    }


}
