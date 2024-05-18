<?php

namespace App\Http\Controllers\Frontend_Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactPage;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    //START Frontend Contact Page
    public function ContactMain()
    {
        $contactpage = ContactPage::all();
        return view('Frontend.Admin.contact_page_front', compact('contactpage'));
    }

    public function ContactStore(Request $request)
    {
        //Validation
        $request->validate([
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'contact_message' => 'required'
        ]);

        ContactPage::insert([
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contact_phone' => $request->contact_phone,
            'contact_message' => $request->contact_message,
            'created_at'=>Carbon::now()
        ]);

        return redirect()->route('contact.main')->with('message', 'Success - Contact User Successfully Added.');
    }
    //END Frontend Contact Page

    //START Backend Contact Page
    public function ContactPage()
    {
        $contactpage = ContactPage::paginate(20);
        return view('Backend.Admin.contact_page', compact('contactpage'));
    }

    public function ContactDelete($id)
    {
        ContactPage::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Success - Contact User Successfully Deleted.');
    }
    //END Backend Contact Page

}
