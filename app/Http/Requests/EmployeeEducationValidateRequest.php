<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeEducationValidateRequest extends FormRequest
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
             * +--------------+-----------------+------+-----+---------+----------------+
            | Field        | Type            | Null | Key | Default | Extra          |
            +--------------+-----------------+------+-----+---------+----------------+
            | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
            | education    | varchar(255)    | NO   | UNI | NULL    |                |
            | descriptions | longtext        | YES  |     | NULL    |                |
            | deleted_at   | timestamp       | YES  |     | NULL    |                |
            | created_at   | timestamp       | YES  |     | NULL    |                |
            | updated_at   | timestamp       | YES  |     | NULL    |                |
            +--------------+-----------------+------+-----+---------+----------------+

             */
            'education' => 'required',
            'descriptions' => 'required'
        ];

    }

    public function messages()
    {
        return [
              'education.required' => 'Education is Required',
              'description.required' =>'Descriptions is Empty'
        ];
    }
}
