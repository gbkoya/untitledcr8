<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
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

    /**
        * @OA\Get(
        * path="/auth/google",
        * operationId="GoogleOAuth",
        * tags={"Google OAuth"},
        * summary="Google sign up/in",
        * description="Takes you to the google signin page",
        *     @OA\RequestBody(
        *         @OA\JsonContent(),
        *    ),
        *    @OA\Response(response=200, description="Takes user to google signin with mail page"),
        * )
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

    /**
        * @OA\Get(
        * path="/callback/google",
        * operationId="Google callback",
        * tags={"Handle Google callback"},
        * summary="This handles the callback from google and pushes the user details to the system",
        * description="Google OAuth to either login or register a user in the system via their, you don't have to paas in any parameter as this is already being automated from the backend",
        *     @OA\RequestBody(
        *         @OA\JsonContent(),
        *         @OA\MediaType(
        *            mediaType="multipart/form-data",
        *            @OA\Schema(
        *               type="object",
        *               required={"firstname", "lastname", "email", "google_id", "password"},
        *               @OA\Property(property="email", type="email"),
        *               @OA\Property(property="firstname", type="text"),
        *               @OA\Property(property="lastname", type="text"),
        *               @OA\Property(property="google_id", type="integer"),
        *               @OA\Property(property="password", type="password")
        *            ),
        *        ),
        *    ),
        *      @OA\Response(
        *          response=200,
        *          description="Either logged in or signed in Successfully",
        *          @OA\JsonContent()
        *       ),
        *      @OA\Response(response=400, description="Error occured with error message"),
        *      @OA\Response(response=404, description="Resource Not Found"),
        * )
    */
    public function handleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->user['id'])->first();

            if (isset($finduser))
            {
                return response()->json([
                    'status' => true,
                    'message' => 'User Logged In Successfully',
                    'token' => $finduser->createToken("API TOKEN")->plainTextToken
                ], 200);
            } else {
                $given_name = (isset($user->user['given_name'])) ? $user->user['given_name'] : '';
                $family_name = (isset($user->user['family_name'])) ? $user->user['family_name'] : '';

                $mailExist = User::where('email', $user->email)->first();

                if ($mailExist) {
                    return response()->json([
                        'status'    => true,
                        'message'   => 'User Logged In Successfully',
                        // 'data'      => 'Welcome back '.auth()->user()->firstname,
                        'data'      => 'Welcome back',
                        'token'     => $mailExist->createToken("API TOKEN")->plainTextToken
                    ], 200);
                } else {
                    try {
                        $newUser = User::create([
                            'firstname' => $given_name,
                            'lastname' => $family_name,
                            'email' => $user->email,
                            'google_id' => $user->id,
                            // 'social_type' => 'google',
                            // 'password' => encrypt('my-google'),
                            'password' => Hash::make('mypassword'),
                        ]);

                        return response()->json([
                            'status'    => true,
                            'message'   => 'User Logged In Successfully',
                            // 'data'      => 'Welcome back '.auth()->user()->firstname,
                            'data'      => 'Welcome back',
                            'token'     => $newUser->createToken("API TOKEN")->plainTextToken
                        ], 200);

                    } catch (\Illuminate\Database\QueryException $e) {
                        $newUser = User::create([
                            'firstname' => $given_name,
                            'lastname' => $family_name,
                            'email' => $user->email,
                            'google_id' => $user->id,
                            // 'social_type' => 'google',
                            'password' => Hash::make('mypassword'),
                        ]);

                        return response()->json([
                            'status'    => true,
                            'message'   => 'User Logged In Successfully',
                            // 'data'      => 'Welcome back '.auth()->user()->firstname,
                            'data'      => 'Welcome back',
                            'token'     => $newUser->createToken("API TOKEN")->plainTextToken
                        ], 200);
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
