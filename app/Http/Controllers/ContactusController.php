<?php

namespace App\Http\Controllers;

use App\Notifications\Contactusdata;
use Exception;
use NewsLetter;
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
            'data' => 'required',
        ]);


        if ($validator->fails())
        {
            $error = $validator->errors()->toArray();
            return response()->json([
                'errors' => $error,
                'data' => 'Something went wrong',
            ], 500);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'date' => $request->date,
            'data' => $request->data,
        ];

        Notification::route('mail', 'Info@arcwaretechgroup.com')->notify(new Contactusdata($data));

        return response()->json([
            'success' => True,
            'data' => 'data submitted',
        ], 200);

    }

    public function subscribe (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);


        if ($validator->fails())
        {
            $error = $validator->errors()->toArray();
            return response()->json([
                'errors' => $error,
                'data' => 'Something went wrong',
            ], 500);
        }
        $subscribed_email = $request->email;

        try {
            if (NewsLetter::isSubscribed($subscribed_email)) {
                return response()->json([
                    'error' => 'Email already subscribed',
                ], 401);
            } else {
                NewsLetter::subscribe($subscribed_email);
                return response()->json([
                    'success' => True,
                    'data' => 'Email subscribed',
                ], 200);
            }
        } catch (Exception $e) {
            return response()->json([
                'errors' => $e,
                'data' => 'Something went wrong',
            ], 500);
        }
    }
}
