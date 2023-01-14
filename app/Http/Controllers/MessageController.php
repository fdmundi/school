<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //

    public function message_us(Request $request)
    {
        $request->validate([
            'subject' => 'string|required',
            'sender' => 'string|required',
            'email' => 'string|nullable',
            'message' => 'string|required',
        ]);

        $subject = $request->subject;
        $sender = $request->sender;
        $email = $request->email;
        $message = $request->message;

        $saved_message = new Message([
            'subject' => $subject,
            'sender' => $sender,
            'email' => $email,
            'message' => $message,
        ]);

        try {
            $saved_message->save();
        }catch (\Exception $exception)
        {
            return redirect()->back()->with('fail', 'message sent Successfully, We will get in touch with you shortly.');

        }
        return redirect()->back()->with('success', 'message sent Successfully, We will get in touch with you shortly.');



    }
}
