<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'email' => 'required|email|max:255',
            'company_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'role' => 'nullable|string|max:100',
            'interests' => 'nullable|array',
            'interested_in' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $details = [];
        if (! empty($validated['phone'])) {
            $details[] = 'Phone: '.$validated['phone'];
        }
        if (! empty($validated['role'])) {
            $details[] = 'Role: '.$validated['role'];
        }
        if (! empty($validated['interests'])) {
            $details[] = 'Interests: '.implode(', ', $validated['interests']);
            if (empty($validated['interested_in'])) {
                $validated['interested_in'] = implode(', ', $validated['interests']);
            }
        }
        if (! empty($validated['message'])) {
            $details[] = 'Message: '.$validated['message'];
        }

        $validated['message'] = ! empty($details) ? implode("\n", $details) : 'Demo Request';

        ContactMessage::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'] ?? null,
            'email' => $validated['email'],
            'company_name' => $validated['company_name'] ?? null,
            'interested_in' => $validated['interested_in'] ?? null,
            'message' => $validated['message'],
        ]);

        $name = $validated['first_name'];

        return redirect(url()->previous().'#contact')->with(
            'success',
            "Thank you, {$name}! 🎉 Your demo request has been received. Our team will get back to you shortly."
        );
    }
}
