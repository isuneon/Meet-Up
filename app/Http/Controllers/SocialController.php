<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;
use DB;

use App\Models\Social;
//use DB;
class SocialController extends Controller
{
    public function redirect (){
        return Socialite::driver('meetup')->redirect();
    }

    public function callback(){
        
        $user = Socialite::driver('meetup')->user();
                if ($the_user = User::select()->where('member_id', '=', $user->id)->first()) {
                    Auth::login($the_user);
                }else 
                {
                    $new_user = new User;
                    $new_user->name = $user->name;
                    $new_user->email = $user->email;
                    $new_user->member_id = $user->id;
                    $new_user->social = 1;
                    $new_user->save();
                    Auth::login($new_user);
                }       

        return redirect('home');
    }
}
