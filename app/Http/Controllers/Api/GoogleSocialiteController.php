<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleSocialiteController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('social_id', $user->user['id'])->first();

            if (isset($finduser)) {

                return response()->json([
                    'status' => true,
                    'message' => 'User Logged In Successfully',
                    'token' => $finduser->createToken("API TOKEN")->plainTextToken
                ], 200);

                /*
                Auth::login($finduser, true);
                return response()->json([
                    'status' => TRUE,
                    'message' => 'Welcome back '.auth()->user()->username,
                ], 200);
                */


            } else {
                $given_name = (isset($user->user['given_name'])) ? $user->user['given_name'] : '';
                $family_name = (isset($user->user['family_name'])) ? $user->user['family_name'] : '';

                $mailExist = User::where('email', $user->email)->first();

                if ($mailExist) {

                    return response()->json([
                        'status'    => true,
                        'message'   => 'User Logged In Successfully',
                        'data'      => 'Welcome back '.auth()->user()->username,
                        'token'     => $mailExist->createToken("API TOKEN")->plainTextToken
                    ], 200);

                    // Auth::login($mailExist, true);
                    // return response()->json([
                    //     'status' => TRUE,
                    //     'message' => 'Welcome back '.auth()->user()->username,
                    // ], 200);

                } else {
                    try {
                        $newUser = User::create([
                            'name' => $given_name.' '.$family_name,
                            'email' => $user->email,
                            'social_id' => $user->id,
                            'social_type' => 'google',
                            // 'password' => encrypt('my-google'),
                            'password' => Hash::make('mypassword'),
                        ]);

                        return response()->json([
                            'status'    => true,
                            'message'   => 'User Logged In Successfully',
                            'data'      => 'Welcome back '.auth()->user()->username,
                            'token'     => $newUser->createToken("API TOKEN")->plainTextToken
                        ], 200);

                        /*
                        Auth::login($newUser, true);
                        return redirect()->route('/')->with('success', 'Welcome, <span class="fw-bold">' . auth()->user()->username . '</span> to MirrorLog, the Home of Entertainment.<br>
                        <br>Share your first content <span style="font-size:30px"> ✍��� ��� ��� </span>');
                        */

                    } catch (\Illuminate\Database\QueryException $e) {
                        // $random_number = app('App\Http\Controllers\HelperFunctionsController')->random_number();
                        $random_number = "mm";

                        $newUser = User::create([
                            'name' => $given_name.' '.$family_name. $random_number,
                            'email' => $user->email,
                            'social_id' => $user->id,
                            'social_type' => 'google',
                            // 'password' => encrypt('my-google'),
                            'password' => Hash::make('mypassword'),
                        ]);

                        return response()->json([
                            'status'    => true,
                            'message'   => 'User Logged In Successfully',
                            'data'      => 'Welcome back '.auth()->user()->username,
                            'token'     => $newUser->createToken("API TOKEN")->plainTextToken
                        ], 200);


                        // Auth::login($newUser, true);
                        // return response()->json([
                        //     'status' => TRUE,
                        //     'message' => 'Welcome '.auth()->user()->username.', ',
                        // ], 200);

                    }
                }
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => FALSE,
                'message' => 'An error occured: '.$e->getMessage(),
            ], 500);
        }
    }
}
