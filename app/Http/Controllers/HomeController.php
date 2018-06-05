<?php

namespace App\Http\Controllers;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use GuzzleHttp\Client;
use DMS\Service\Meetup\MeetupKeyAuthClient;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                   // traigo los datos integrantes de los eventos
                 $clientmet = MeetupKeyAuthClient::factory(array('key' => '7f22671f823125e282173341e6c7a54'));

                 $responsem = $clientmet->getRsvps(array('event_id' => '249390499'));
                          




            //$client = new Client();
            // Base URI is used with relative requests
             $client = new Client();
             //$grupo = $client->get('');
             //dd($grupo);

            $request = $client->get('https://prueba2-61307.firebaseio.com/users.json?print=pretty');
                
            $response = $request->getBody()->getContents();
            $array = json_decode($response, true);
            $holis = $array['1']['member_id'];
            //dd($holis)

            

           




        //$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/prueba2-61307-firebase-adminsdk-9tmif-9183dc24b8.json');
        //$firebase = (new Factory)
        //->withServiceAccount($serviceAccount)
        // ->withDatabaseUri('https://prueba2-61307.firebaseio.com/')->create();;
        //$holi = $firebase->getDatabase();
        //$holis = $holi->getReference('users/1/member_id');
        //$snapshot = $holis->getSnapshot();
        //$value = $holis;
        //dd($holis);
        //$miembro = $value->member_id;
         //dd($holis);
         //$auth = $firebase->getAuth();
         //$users = $auth->listUsers($defaultMaxResults = 1000, $defaultBatchSize = 1000);
         //$hola = $auth->getUser('some-uid');
         //dd(auth()->user()->name);
        return view('home',[
            'holis' => $holis,
            'array' => $array,
            'responsem' => $responsem
            //'hola'  => $hola
            //'miembro' => $miembro
            
        ]);
    }

    public function guardar() {
         
       $registro = new Registro();
       $registro->indicador = $request->indicador;

    //$registro->save();
        //dd($data);



        $client = new Client([
    'headers' => [ 'Content-Type' => 'application/json' ]]);

        $guardar = $client->post('https://pruebameetup.firebaseio.com/grupos.json?',
        ['body' => $data]);
    //return $guardar;
        //return "Hello World!";
    }


}
