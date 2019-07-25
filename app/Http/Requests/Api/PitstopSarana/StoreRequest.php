<?php

namespace App\Http\Requests\Api\PitstopSarana;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'driver'        => 'nullable|max:64',
            'tanggal'       => 'required',
            'whs_number'    => 'required|max:64',
            'lokasi'        => 'required|max:64'
        ];
    }

    public function attributes()
    {
        return [
            'lokasi' => 'location'
        ];
    }
}
