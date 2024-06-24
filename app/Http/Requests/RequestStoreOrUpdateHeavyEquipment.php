<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdateHeavyEquipment extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:255',
            'image' => 'nullable',
            'rental_price' => 'required|numeric',
            'operator_price' => 'required|numeric',
        ];

        if ($this->isMethod('post')) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'name' => 'Nama Alat Berat',
            'image' => 'Gambar Alat Berat',
            'rental_price' => 'Harga Sewa',
            'operator_price' => 'Harga Operator',
        ];
    }
}
