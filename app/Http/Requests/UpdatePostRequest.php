<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('is-moderator');
    }

    public function rules(): array
    {

        return [
            'region' => ['required'],
            'town' => ['required'],
            'street' => ['required'],
            'buildingType' => ['required'],
            'houseNumber' => ['required'],
            'building' => ['nullable'],
            'coordinates' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'region.required' => "Выберите одно из значений",
            'town.required' => "Выберите одно из значений",
            'street.required' => "Выберите одно из значений",
            'buildingType.required' => "Выберите одно из значений",
            'houseNumber.required' => 'Заполните это поле.',
            'coordinates.required' => 'Выберите объект на карте'
        ];
    }
}
