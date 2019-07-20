<?php

namespace App\Http\Requests\Api\Unit;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'kode_unit' => 'required|min:1|max:255|unique:unit,kode_unit,'.$request->segment(4),
            'tipe_unit' => 'nullable|max:255',
            'no_polisi' => 'required|min:1|max:255|unique:unit,no_polisi,'.$request->segment(4),
            'jatah_solar' => 'nullable|max:50'
        ];
    }
}
