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
    //curl 'https://docs-examples.firebaseio.com/users/13/member_id.json?print=pretty';
   //onsole.log(curl)

</script>
   <?php 
        $miembro = '254635625';
                //dd($miembro);
            //require_once('Meetup-API-client-for-PHP/Meetup.php');
            $api_key = '7f22671f823125e282173341e6c7a54';
            $connection = new MeetupKeyAuthConnection($api_key);
            $m = new MeetupEvents($connection); 
            $events = $m->getEvents( array( 'member_id' => $miembro   ) );
            $evento = $events;

        $g = new MeetupGroups($connection);
        $groups = $g->getGroups( array( 'member_id' => $miembro ));
        $grupos = $groups;

 ?>
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
                        <?php  
                           //dd($ev);
                          foreach ($responsem as $responseItem) {
                            //dd($responsem);
                             //echo $responseItem['event']['name'] . PHP_EOL;
                            }

                        ?>
                    </div>
                        
                   
                        
                      <form  id="datosguardar" class="datosguardar" name="datosguardar">
                            

                        <div class="form-group row mb-0">
                                  <div class="col-md-8 offset-md-4">
                                    
                                      
                                  </div>
                              </div>
                        <div>
                      
                    </div>
                    
                        
                        
                       
                            
                        </form>
                            

                        
                        

                        </div>  
                       <div>
                             
                        </div>
                    </form>
                  
              

                </div>
            </div>
        </div>
    </div>
</div>




<script src="assets/js/jquery-2.1.3.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/bootstrap/js/bootstrap.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/materialize/js/materialize.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/js/menuzord.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/js/bootstrap-tabcollapse.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/js/jquery.easing.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/js/jquery.sticky.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/js/smoothscroll.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/js/smooth-menu.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/js/jquery.stellar.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/js/imagesloaded.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/js/jquery.inview.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/js/jquery.shuffle.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/owl.carousel/owl.carousel.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/flexSlider/jquery.flexslider-min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/magnific-popup/jquery.magnific-popup.min.js" type="5f2a35b307d5d1aef624d016-"></script>
<script src="assets/js/scriptsae52.js?v=5" type="5f2a35b307d5d1aef624d016-"></script>
<script src="../../../ajax.cloudflare.com/cdn-cgi/scripts/92209a86/cloudflare-static/rocket-loader.min.js" data-cf-nonce="5f2a35b307d5d1aef624d016-" defer=""></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
 <script> 
 (function ($) {
    $.fn.serializeFormJSON = function () {

        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
})(jQuery);

$('form').submit(function (e) {
    e.preventDefault();
    var data = $(this).serializeFormJSON();
    console.log(data);
 

}
);

</script>

@endsection
