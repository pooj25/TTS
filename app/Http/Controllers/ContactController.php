<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'email' => 'required|email|max:255',
            'company_name' => 'nullable|string|max:255',
            'interested_in' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($validated);

        $name = $validated['first_name'];
        return redirect('/contact')->with(
            'success',
            "Thank you, {$name}! 🎉 Your message has been received. Our team will get back to you within 24 hours."
        );
    }
}
