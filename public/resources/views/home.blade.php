@extends('layouts.app')

@section('content')
<script src="https://www.gstatic.com/firebasejs/5.0.2/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDjahH7yAJ9i8kss7S1EeBQATWp5XwJGLE",
    authDomain: "prueba2-61307.firebaseapp.com",
    databaseURL: "https://prueba2-61307.firebaseio.com",
    projectId: "prueba2-61307",
    storageBucket: "prueba2-61307.appspot.com",
    messagingSenderId: "38686236170"
  };
  firebase.initializeApp(config);
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif



                    <div>
                    </div>
                    <?php 
                    
                    $miembro = $holis;

                    dd($miembro);
                    $api_key = '7f22671f823125e282173341e6c7a54';
                    $connection = new MeetupKeyAuthConnection($api_key);
                    $m = new MeetupEvents($connection); 

                    
                    //para los eventos
                    $events = $m->getEvents( array( 'member_id' => $miembro   ) );
                    $evento = $events;
                        
                       // echo $evento['name'];
                       foreach($evento as $ev){
                            echo $ev['name'] . " at " . $ev['venue']['name']. "<br>" ;

                        } 
                        //para los comentarios
                        //$m = new MeetupEvents($connection); 
                         //$comments = $m->getEventComments( array( 'event_id' => '249390499' ) ) ;
                         //$commentario = $comments;

                         //foreach($commentario as $come) {
                           //   echo $come['member_name'] . " - " . $come['comment'] . "<br>";
                            // }

                        //    //rating
                        //    $ratings = $m->getEventRatings( array( 'event_id' => '249390499' ) ) ;

                        //     foreach($ratings as $r) {
                        //         echo $r['rating'] . " - " . $r['review'] . "<br>";
                        //         }  

                        //print($events);
                        /*foreach($events as $e) {
                        echo $e['name'] . " at " . date(DATE_W3C, $e['time']/1000) . "<br>";
                        }   */
                     ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
