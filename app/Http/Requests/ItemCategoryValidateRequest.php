<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemCategoryValidateRequest extends FormRequest
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
            | code         | varchar(255)    | YES  | UNI | NULL    |                |
            | name         | varchar(255)    | NO   | UNI | NULL    |                |
            | descriptions | longtext        | YES  |     | NULL    |                |
            | deleted_at   | timestamp       | YES  |     | NULL    |                |
            | created_at   | timestamp       | YES  |     | NULL    |                |
            | updated_at   | timestamp       | YES  |     | NULL    |                |
            +--------------+-----------------+------+-----+---------+----------------+
             */
            'code' => 'required',
            'name' => 'required',
            'descriptions' => 'required'
        ];

    }
    public function messages()
    {
        return [
            'code.required' => 'Item Category Code Field is Required',
            'name.required' => 'Item Category name is Required',
            'descriptions.required' => 'Item category descriptions is Required'
        ];
    }
}
