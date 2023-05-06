<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TanahUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'inp_name'      => ['sometimes', 'string'],
            'inp_project'   => ['sometimes', 'string'],
            'inp_barang'    => ['sometimes', 'string'],
            'inp_harga'     => ['sometimes', 'integer'],
            'inp_lokasi'    => ['sometimes', 'string'],
            'inp_kondisi'   => ['sometimes', 'in:Baik,Rusak'],
            'inp_tglpembelian'   => ['sometimes', 'string'],
        ];
    }
}
