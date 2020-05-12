<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BatchValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /**
         * returned @true:
         */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        /**
      * +--------------+-----------------+------+-----+---------+----------------+
        | Field        | Type            | Null | Key | Default | Extra          |
        +--------------+-----------------+------+-----+---------+----------------+
        | id           | bigint unsigned | NO   | PRI | NULL    | auto_increment |
        | code         | varchar(255)    | NO   | UNI | NULL    |                |
        | name         | varchar(255)    | NO   | UNI | NULL    |                |
        | descriptions | longtext        | YES  |     | NULL    |                |
        | deleted_at   | timestamp       | YES  |     | NULL    |                |
        | created_at   | timestamp       | YES  |     | NULL    |                |
        | updated_at   | timestamp       | YES  |     | NULL    |                |
        +--------------+-----------------+------+-----+---------+----------------+

         */
        return [
                'code' => 'required',
                'name' => 'required',
                'descriptions' => 'required'

            ];
    }
    public function messages()
    {
        return [
              'code.required' => 'Batch Code is Required',
              'name.required' => 'Batch Name is Required',
              'descriptions.required' => 'Batch Descriptions is Relevant'
        ];

    }
}
