<?php

namespace App\Http\Controllers;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use GuzzleHttp\Client;
use Socialite;
use DMS\Service\Meetup\MeetupKeyAuthClient;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
















                       // traigo los datos integrantes de los eventos
       //$clientmet = MeetupKeyAuthClient::factory(array('key' => 'd16626276451124e87b2a4e254038'));

       //$responsemet = $clientmet->getRsvps(array('event_id' => '249390499'));
       $client = new Client();
       $request = $client->get('https://meetup-d3c98.firebaseio.com/users.json?print=pretty');
       $response = $request->getBody()->getContents();
        $array = json_decode($response, true);

        //$user = Socialite::driver('meetup')->stateless()->user();
        //$holis = $responsemet;
        $user = Socialite::driver('meetup')->stateless()->user();
        $the_user = $user->id;
        //dd($holis);
        return view('home',[
                    //'holis' => $holis,
                    'array' => $array,
                    'the_user'=> $the_user 
                   ]);
    }




    public function guardar(Request $request) 
    {
     //return  $_POST['data'];
    



        $data = json_encode(
         array( $request->all())
         );
        //dd($data);
        

        $client = new Client([
        'headers' => [ 'Content-Type' => 'application/json' ]]);

        $guardar = $client->post('https://prueba2-61307.firebaseio.com/eventos.json?',
        ['body' => $data]);
    
        return "se guardo con exito la informaicion";
    }
    public function datos() 
    {
       

        $miembro = '254635625';
                
            $api_key = '7f22671f823125e282173341e6c7a54';
            $connection = new MeetupKeyAuthConnection($api_key);
            $m = new MeetupEvents($connection); 
            $events = $m->getEvents( array( 'member_id' => $miembro   ) );
            $evento = $events;

        $g = new MeetupGroups($connection);
        $groups = $g->getGroups( array( 'member_id' => $miembro ));
        $grupos = $groups;
    }


}
