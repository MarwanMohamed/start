<?php

namespace App\Http\Requests\Lookup;

use App\Http\Requests\BaseRequest;

class StoreLookupRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:lookup_categories,id',
            'name' => 'required|max:100|unique:lookups,name',
            'code' => 'required|max:100|unique:lookups,code',
            'value' => 'nullable|max:100',
            'is_active' => 'nullable|boolean',
            'is_system' => 'nullable|boolean',
            'model_type' => 'required|max:100',
        ];
    }
}
