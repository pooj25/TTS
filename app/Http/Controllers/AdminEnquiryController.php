<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;

class AdminEnquiryController extends Controller
{
    public function index()
    {
        $enquiries = ContactMessage::latest()->get();

        return view('admin.enquiries', compact('enquiries'));
    }

    public function show($id)
    {
        $enquiry = ContactMessage::findOrFail($id);

        return view('admin.enquiry-show', compact('enquiry'));
    }

    public function destroy($id)
    {
        $enquiry = ContactMessage::findOrFail($id);

        $enquiry->delete();

        return redirect('/admin/enquiries')
            ->with('success', 'Enquiry deleted successfully.');
    }
}