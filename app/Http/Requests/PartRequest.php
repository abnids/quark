<?php

namespace horsefly\Http\Requests;

use horsefly\Http\Requests\Request;

class PartRequest extends Request
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
            'partNumber'=> 'required',
            'esDescription'=> 'required',
            'enDescription'=> 'required',
            'cost'=> 'required',
            'weight'=> 'required',
            'grossWeight'=> 'required'
        ];
    }
}
