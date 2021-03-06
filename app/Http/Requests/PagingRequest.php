<?php

namespace App\Http\Requests;

class PagingRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'page' => 'integer|min:1',
            'pageSize' => 'integer|min:1'
        ];
    }
}
