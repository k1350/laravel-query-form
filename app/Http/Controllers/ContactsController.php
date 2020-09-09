<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\Notification;
use Illuminate\Config;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function complete(ContactRequest $request)
    {
        $data = $request->all();
        
        $model = Contact::create($data);

        $request->session()->regenerateToken();

        Mail::to($model->email)->send(new Notification($model->name, $model->email, $model->body));
        Mail::to(config('app.owner.email'))->send(new Notification($model->name, $model->email, $model->body));

        return view('contacts.complete')
        ->with('data', $model);
    }
}