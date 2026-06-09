<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $services = [
            __('services.supply_chain'),
            __('services.sourcing'),
            __('services.logistics'),
            __('services.oem'),
            __('services.trade'),
            __('services.consulting'),
            __('services.equipment'),
            __('services.operations'),
        ];

        return [
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email:rfc,dns', 'max:160'],
            'phone' => ['nullable', 'string', 'max:60'],
            'company' => ['nullable', 'string', 'max:160'],
            'requested_service' => ['required', 'string', 'max:160', Rule::in($services)],
            'message' => ['required', 'string', 'max:3000'],
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => __('services.validation_full_name_required'),
            'email.required' => __('services.validation_email_required'),
            'email.email' => __('services.validation_email_email'),
            'requested_service.required' => __('services.validation_service_required'),
            'requested_service.in' => __('services.validation_service_in'),
            'message.required' => __('services.validation_message_required'),
            '*.max' => __('services.validation_max'),
        ];
    }

    protected function prepareForValidation(): void
    {
        $locale = $this->query('lang', session('locale', app()->getLocale()));

        if (! in_array($locale, ['en', 'fr'], true)) {
            $locale = 'en';
        }

        session(['locale' => $locale]);
        app()->setLocale($locale);
    }

    protected function passedValidation(): void
    {
        $this->merge([
            'full_name' => trim((string) $this->input('full_name')),
            'email' => trim((string) $this->input('email')),
            'phone' => trim((string) $this->input('phone')),
            'company' => trim((string) $this->input('company')),
            'message' => trim((string) $this->input('message')),
        ]);
    }

    protected function getRedirectUrl(): string
    {
        return url()->previous().'#home-contact';
    }
}
