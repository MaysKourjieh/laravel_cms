<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequests\StoreContactFormRequest;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function store(StoreContactFormRequest $request) {
        try {
            $validated = $request->validated();
            $form = ContactForm::create($validated);
            return response()->json([
                'message' => 'Form submitted successfully',
                'form' => $form
            ]);
        }
        catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }
}
