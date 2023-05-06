<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TanahStoreRequest extends FormRequest
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
            'inp_name'      => ['required', 'string'],
            'inp_project'   => ['required', 'string'],
            'inp_barang'    => ['required', 'string'],
            'inp_harga'     => ['required', 'integer'],
            'inp_lokasi'    => ['required', 'string'],
            'inp_kondisi'   => ['required', 'in:Baik,Rusak'],
            'inp_tglpembelian'   => ['required', 'string'],
        ];
    }
}
