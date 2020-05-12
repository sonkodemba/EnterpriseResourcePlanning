<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            /**
             * +-----------------------+-----------------+------+-----+---------+----------------+
            | Field                 | Type            | Null | Key | Default | Extra          |
            +-----------------------+-----------------+------+-----+---------+----------------+
            | id                    | bigint unsigned | NO   | PRI | NULL    | auto_increment |
            | name                  | varchar(255)    | NO   | UNI | NULL    |                |
            | staff_id              | bigint unsigned | NO   | UNI | NULL    |                |
            | email                 | varchar(255)    | NO   | UNI | NULL    |                |
            | employee_education_id | bigint unsigned | NO   | MUL | NULL    |                |
            | education             | varchar(255)    | NO   |     | NULL    |                |
            | address               | varchar(255)    | NO   |     | NULL    |                |
            | telephone_num         | int unsigned    | NO   |     | NULL    |                |
            | image                 | mediumtext      | NO   |     | NULL    |                |
            | department_id         | bigint unsigned | NO   | MUL | NULL    |                |
            | designation_id        | bigint unsigned | NO   | MUL | NULL    |                |
            | deleted_at            | timestamp       | YES  |     | NULL    |                |
            | created_at            | timestamp       | YES  |     | NULL    |                |
            | updated_at            | timestamp       | YES  |     | NULL    |                |
            +-----------------------+-----------------+------+-----+---------+----------------+
             */
            'name' => 'required',
            'staff_id' => 'required',
            'email' => 'email:rfc,dns',
            'employee_education_id' => 'required',
            'education' => 'required',
            'address' => 'required',
            'telephone_num' => 'required',
            'image' => 'required',
            'department_id' => 'required',
            'designation_id' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Employee Name Field is Required',
            'staff_id.required' => 'Staff ID Field is Required',
            'email.required' => 'Email Field is Required',
            'employee_education_id.required' => 'Select Level of Education',
            'education.required' => 'Employee Education field is Empty',
            'address.required' => 'Address Field is Empty',
            'telephone_num.required' => 'Telephone No field is Empty',
            'image.required' => 'Choose Image',
            'department.required' => 'Select Department',
            'designation.required' => 'Select Designation'
        ];
    }
}
