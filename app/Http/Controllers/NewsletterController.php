<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $email = $request->input('email');

        // Check if already subscribed
        $exists = NewsletterSubscriber::where('email', $email)->exists();

        if ($exists) {
            return redirect()->back()->with(
                'newsletter_info',
                "You're already subscribed with {$email}. We'll keep sending you the latest insights! 😊"
            );
        }

        NewsletterSubscriber::create(['email' => $email]);

        return redirect()->back()->with(
            'newsletter_success',
            "🎉 Thank you for subscribing! You'll receive the latest manufacturing insights from Track Tech Solutions."
        );
    }
}
