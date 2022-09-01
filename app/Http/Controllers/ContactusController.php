<?php

namespace App\Http\Controllers;

use App\Notifications\ContactusMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class ContactusController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string',
            // 'phonenumber' => 'string',
            'email' => 'required|email',
            // 'date' => 'required',
            'message' => 'required',
        ]);


        if ($validator->fails())
        {
            $error = $validator->errors()->toArray();
            return response()->json([
                'errors' => $error,
                'data' => 'Something went wrong',
            ], 500);
        }

        $message = [
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'date' => $request->date,
            'message' => $request->message,
        ];

        Notification::route('mail', 'Info@arcwaretechgroup.com')->notify(new ContactusMessage($message));

        return response()->json([
            'success' => True,
            'data' => 'Message submitted',
        ], 200);

    }
}
