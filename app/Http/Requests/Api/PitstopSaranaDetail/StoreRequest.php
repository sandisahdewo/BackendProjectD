<?php

namespace App\Http\Requests\Api\PitstopSaranaDetail;

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
            'kode_unit' => 'required',
            'hm_km'     => 'required|numeric',
            'qty_solar' => 'required|numeric',
            'nama_user' => 'required|min:1|max:255',
            'flow_meter_awal'    => 'required|numeric',
            'flow_meter_akhir'   => 'required|numeric|gt:flow_meter_awal',
        ];
    }
}
