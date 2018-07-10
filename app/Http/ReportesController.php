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


class ReportesController extends Controller
{
		 public function index()
    {

    	 return view('reportes');
    }
}