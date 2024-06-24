<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdateRental extends FormRequest
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
            'heavy_equipment_id' => 'required|exists:heavy_equipments,id',
            'customer_id' => 'required|exists:users,id',
            'rental_date' => 'required|date|after:today',
            'return_date' => 'required|date|after_or_equal:rental_date',
            'proof_of_payment' => 'nullable|image|mimes:jpg,jpeg,png',
        ];
    }

    public function attributes()
    {
        return [
            'heavy_equipment_id' => 'Alat Berat',
            'customer_id' => 'Customer',
            'rental_date' => 'Tanggal Sewa',
            'return_date' => 'Tanggal Kembali',
            'proof_of_payment' => 'Bukti Pembayaran',
        ];
    }

    public function messages()
    {
        return [
            '*.before' => ':attribute harus sebelum :date.',
            'rental_date.after' => ':attribute harus setelah hari ini.',
            '*.after' => ':attribute harus setelah :date.',
        ];
    }
}
