<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;
use DMS\Service\Meetup\MeetupKeyAuthClient;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use GuzzleHttp\Client;
//use DMS\Service\Meetup\MeetupKeyAuthClient;

//use App\Models\Social;
//use DB;
class SocialController extends Controller
{
    public function redirect (){
        return Socialite::driver('meetup')->redirect();
    }

    public function callback(){






            //$clientmet = MeetupKeyAuthClient::factory(array('key' => 'd16626276451124e87b2a4e254038'));

            //$responsemet = $clientmet->getRsvps(array('event_id' => '249390499'));
         
             $client = new Client();
             
            $request = $client->get('https://meetup-d3c98.firebaseio.com/users.json?print=pretty');
            $response = $request->getBody()->getContents();
            $array = json_decode($response);
          foreach($array as $obj){
            $miembro = $obj->member_id;
             } 
             $user = Socialite::driver('meetup')->stateless()->user();
            $the_user = $user->id;
            
             //$holis = $responsemet;
                if ($the_user == $miembro   ) {
           //Auth::login($the_user);
          return view('home',[
                    //'holis' => $holis,
                    'array' => $array,
                    'the_user'=> $the_user
                   ]);
                    
                }else 
                {

                    //dd('chao');
                     $clientmet = new Client([
                    'headers' => [ 'Content-Type' => 'application/json' ]]);
                     $data = json_encode(
                              array(

                     $name = $user->name 
                     
                    ));
                     $data1 = json_encode(array(
                        $member_id = $user->id
                        ));

                     $new_user = $clientmet->post('https://meetup-d3c98.firebaseio.com/users.json',
                      ['body' =>json_encode( [ 
                        'member_id' => $user->id,
                        'name' => $user->name
                        ] )]);
                      return view('home',[
                    'holis' => $holis,
                    'array' => $array,
                    
                   ]);
                    
           // return redirect('home');
                }       
               
    }
}
