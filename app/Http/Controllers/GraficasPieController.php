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


class GraficasPieController extends Controller
{
		 public function index()
    {
    			 $client = new Client();
             
            $requestinscritos = $client->get('https://meetup-d3c98.firebaseio.com/eventos.json?print=pretty');
            $response = $requestinscritos->getBody()->getContents();
            $array = json_decode($response);
            //dd($array);
            //dd($array['miembrosevento']);
          foreach($array as $obj){
            $miembro = $obj;
            	foreach ($miembro as  $value) {
            	 	$miembrosevento = json_encode($value->miembrosdeevento,JSON_NUMERIC_CHECK);
            	 	
            	 } 

             }
             $asistentes = "$miembrosevento";

             //dd($asistentes);
    	 return view('graficaspie', [
                    'miembrosevento' => $miembrosevento,
                    'asistentes' => $asistentes
                   ]);
    }
}