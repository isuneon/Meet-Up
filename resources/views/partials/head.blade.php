@extends('layouts.app')

@section('head')
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

            $comments = $m->getEventComments( array( 'member_id' => $miembro ) ) ;
            $comentarios = $comments;


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
                    </div>
                        
                    <div>
                        
                     @foreach ($evento as $ev)
                    
                        <div class="infoevento" id="infoevento">
                        <?php  
                            //dd($ev);

                        ?>
                        <div class="Nombre">

                                         <?php
                                    echo 'Nombre del evento'."<br>"; print_r($ev['name']. "<br>"); 
                                     
                                    ?>
                        </div>
                          <div class="Pais">

                                         <?php
                                    echo 'Pais del evento'."<br>"; print_r($ev['venue']['localized_country_name']. "<br>"); 
                                     
                                    ?>
                        </div>
                        <div class="Ciudad">

                                         <?php
                                    echo 'ciudad del evento'."<br>"; print_r($ev['venue']['city']. "<br>"); 
                                     
                                    ?>
                        </div>
                         <div class="direccion">

                                         <?php
                                    echo 'direccion del evento'."<br>"; print_r($ev['venue']['address_1']. " en " .$ev['venue']['name'] . "<br>"); 
                                     
                                    ?>
                        </div>
                        <div class="status">

                                         <?php
                                    echo 'status del evento'."<br>"; print_r($ev['status']. "<br>"); 
                                     
                                    ?>
                        </div>
                        <div class="idevento"  hidden>

                                         <?php
                                    echo 'id del evento'."<br>"; print_r($ev['id']. "<br>"); 
                                     
                                    ?>
                        </div>
                            
                            

                        </div>
                     @endforeach

                    </div>  
                    <div>
                        <div class="grupodata" id="grupodata">
                                
                              @foreach ($grupos as $gr)
                                 @foreach ($gr as $key => $value)

                                <div class="Pais">
                                    -
                                    <?php
                                    //dd($value['name']);
                                    echo 'Nombre'."<br>"; print_r($gr['name']. "<br>"); 
                                     
                                    ?>
                                </div>
                            <div class="Ciudad">
                            
                                <?php 
                                echo 'Ciudad: '."<br>"; print_r($gr['city']."<br>");
                                 
                                ?>
                            </div>
                            <div class="rating">
                            
                                <?php 
                                echo 'rating del grupo:'."<br>";print_r($gr['rating']."<br>");
                                 
                                ?>
                            </div>
                            <div class="description">
                            
                                <?php 
                                echo 'descripcion del grupo:'."<br>"; print_r($gr['description']."<br>");
                                 
                                ?>
                            </div>
                            <div class="idgrupo">
                            
                                <?php 
                                 echo 'id del grupo:'."<br>";print_r($gr['id']."<br>");
                                 
                                ?>
                            </div>
                            <div class="cantidad de miembros">
                                    <?php
                                   echo 'miembros:'."<br>"; print_r($gr['members']."<br>");
                                   ?>
                            </div>
                            <div class="temas">
                                    <?php
                                    //print_r($ev['venue']['address_1'])
                                   //echo 'temas:'."<br>"; print_r($value['topics']['name']."<br>");
                                   ?>
                            </div>
                             <div class="categoria">
                                    <?php
                                   echo 'categoria:'."<br>"; print_r($gr['category']['name']."<br>");
                                   ?>
                            </div>
                             <div class="organizadordegrupo">
                                    <?php
                                   echo 'organizador:'."<br>"; print_r($gr['organizer']['name']."<br>");
                                   ?>
                            </div>
                        
                         </div>
                        
                         
                        @endforeach
                     @endforeach

                    </div>
                       <div>
                            <div class="comentarios">
                                  @foreach ($comments as $c) 
                                    <div class="nombremiembro">
                                        <?php 
                                           echo 'nombre del miembro'."<br>"; print_r($c['member_name']. "<br>");
                                            echo '-'."<br>"; print_r($c['commet']. "<br>");
                                         ?>
                                    </div>



                                @endforeach

                            </div>



                         </div>


                

                </div>
            </div>
        </div>
    </div>
</div>




@endseaction
