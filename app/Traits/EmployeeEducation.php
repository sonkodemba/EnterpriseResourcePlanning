<?php


namespace App\Traits;


trait EmployeeEducation{


    /**
     ********************************************************************************
     * On the other hand, the @accessor allows you to alter data after              *
     * it's fetched from a database                                                 *
     *                                                                              *
     ********************************************************************************
     *
    * @param $education
     * @return string
     */
    public function getEducationAttribute($education)
    {
        return strtoupper($education);
    }

    public function getDescriptionsAttribute($descriptions)
    {
        return ucfirst($descriptions);
    }

    public function getCodeAttribute($code)
    {
        return strtoupper($code);
    }

    /***************************************************************************
     * Alter Data from a form before its save into the Database.
     * The @mutator allows you to alter  data before it's saved to a database.
     ***************************************************************************
     * @param $education
     * @return string
     */

    public function setEducationAttribute($education)
    {
        return $this -> attributes['education'] = strtolower($education);
    }


    public function setDescriptionsAttribute($descriptions)
    {
        return $this -> attributes['descriptions'] = strtolower($descriptions);
    }

    public function setCodeAttribute($code)
    {
        return $this -> attributes['code'] = strtolower($code);
    }
}
