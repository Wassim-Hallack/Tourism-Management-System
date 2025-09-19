<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usermobile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $is_user = Usermobile::where('email', $user->getEmail())->first();

            if (!$is_user) {
                $fullName = $user->getName();
                $i = 0;
                $name = $lastName = "";
                for (; $i < strlen($fullName); $i++) {
                    if ($fullName[$i] === ' ') {
                        break;
                    }

                    $name = $name . $fullName[$i];
                }

                for (; $i < strlen($fullName); $i++) {
                    $lastName = $lastName . $fullName[$i];
                }
                $saveUser = Usermobile::updateOrCreate(
                    [
                        'google_id' => $user->getId()
                    ],
                    [
                        'name' => strtolower($name),
                        'last_name' => strtolower($lastName),
                        'email' => $user->getEmail(),
                        'password' => Hash::make($user->getName() . '@' . $user->getId()),
                    ]
                );
            } else {
                $saveUser = Usermobile::where('email', $user->getEmail())->update([
                    'google_id' => $user->getId(),
                ]);

                $saveUser = Usermobile::where('email', $user->getEmail())->first();
            }

            Auth::loginUsingId($saveUser->id);
            return redirect()->route('home');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
