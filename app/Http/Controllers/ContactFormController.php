<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function __invoke(ContactFormRequest $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validated();

        Mail::to(config('mail.contact_recipient'))
            ->send(new ContactFormMessage($validated));

        if ($request->expectsJson()) {
            return response()->json([
                'message' => __('services.form_success'),
            ]);
        }

        return back()->with('contact_status', __('services.form_success'));
    }
}
