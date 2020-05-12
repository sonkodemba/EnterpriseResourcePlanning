<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierValidateRequest extends FormRequest
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
          * +------------------+-----------------+------+-----+---------+----------------+
            | Field            | Type            | Null | Key | Default | Extra          |
            +------------------+-----------------+------+-----+---------+----------------+
            | id               | bigint unsigned | NO   | PRI | NULL    | auto_increment |
            | name             | varchar(255)    | NO   | UNI | NULL    |                |
            | code             | varchar(255)    | NO   | UNI | NULL    |                |
            | category_id      | bigint unsigned | NO   | MUL | NULL    |                |
            | gppa_license_no  | varchar(255)    | NO   | UNI | NULL    |                |
            | trade_license_no | varchar(255)    | NO   | UNI | NULL    |                |
            | tin              | int unsigned    | NO   | UNI | NULL    |                |
            | gppa_license     | mediumtext      | YES  |     | NULL    |                |
            | trade_license    | mediumtext      | YES  |     | NULL    |                |
            | tin_certificate  | mediumtext      | YES  |     | NULL    |                |
            | address          | longtext        | YES  |     | NULL    |                |
            | telephone        | int unsigned    | NO   |     | NULL    |                |
            | email            | varchar(255)    | NO   | UNI | NULL    |                |
            | descriptions     | longtext        | YES  |     | NULL    |                |
            | deleted_at       | timestamp       | YES  |     | NULL    |                |
            | created_at       | timestamp       | YES  |     | NULL    |                |
            | updated_at       | timestamp       | YES  |     | NULL    |                |
            +------------------+-----------------+------+-----+---------+----------------+

             */
            'name' => 'required',
            'code' => 'required',
            'category_id' => 'required',
            'gppa_license_no' => 'required',
            'trade_license_no' => 'required',

            'tin' => 'required',
            'gppa_license' => 'required',
            'trade_license' => 'required',
            'tin_certificate' => 'required',
            'address' => 'required',
            'email' => 'required',
            'descriptions' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Name is required',
            'code.required' => 'Code is required',
            'category_id.required' => 'Category is required',
            'gppa_license_no.required' => 'GPPA is required',
            'trade_license_no.required' => 'Trade License is required',

            'tin.required' => 'TIN is required',
            'gppa_license.required' => 'GPPA is required',
            'trade_license.required' => ' Trade License is required',
            'tin_certificate.required' => 'Upload TIN is required',
            'address.required' => 'Address Field is required',
            'email.required' => ' Email Field is required',
            'descriptions.required' => 'Descriptions Field is required'
        ];

    }
}
