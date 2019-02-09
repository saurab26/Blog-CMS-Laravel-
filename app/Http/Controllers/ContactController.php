<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactStoreRequest;
use App\Contact;

class ContactController extends Controller
{
    public function store(ContactStoreRequest $request)
    {
        $data = $request->all();
        
        Contact::create($data);

        

        return redirect()->back()->with('message',"Contact successfully send!,Soon get back to you ");
    }
}
