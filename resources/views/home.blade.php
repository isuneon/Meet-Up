@extends('layouts.home')
@section('contenthome')
<?php 
        
            $miembro = $the_user;
            //dd($miembro);
            //require_once('Meetup-API-client-for-PHP/Meetup.php');
            $api_key = 'd16626276451124e87b2a4e254038';
            $connection = new MeetupKeyAuthConnection($api_key);
            $m = new MeetupEvents($connection); 
            $events = $m->getEvents( array( 'member_id' => $miembro  ) );
            $evento = $events;
            //dd($evento);
            $a = new MeetupMembers($connection);

            $members = $a->getMembers( array( 'member_id' => $miembro ));
            //dd($members);
            $mi = new MeetupCheckins($connection);
            $checkins = $mi->getCheckins( array( 'event_id' => 'bqwjglyxkblb' ));
             //dd($checkins);
            $g = new MeetupGroups($connection);
            $groups = $g->getGroups( array( 'member_id' => $miembro ));
            $grupos = $groups;
        //$eventosjson = json_encode($evento);
        //dd($eventosjson);
 ?>

<main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
                    <div class="navigation-trigger__inner">
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                    </div>
                </div>

                <div class="header__logo hidden-sm-down">
                    <h1><a href="/">Material Admin 2.0</a></h1>
                </div>

                <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                        <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
                    </div>
                </form>

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

                    <li class="dropdown">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-email"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="listview listview--hover">
                                <div class="listview__header">
                                    Messages

                                    <div class="actions">
                                        <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                                    </div>
                                </div>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            David Belle <small>12:01 PM</small>
                                        </div>
                                        <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Jonathan Morris
                                            <small>02:45 PM</small>
                                        </div>
                                        <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Fredric Mitchell Jr.
                                            <small>08:21 PM</small>
                                        </div>
                                        <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Glenn Jecobs
                                            <small>08:43 PM</small>
                                        </div>
                                        <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                    <div class="listview__content">
                                        <div class="listview__heading">
                                            Bill Phillips
                                            <small>11:32 PM</small>
                                        </div>
                                        <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                    </div>
                                </a>

                                <a href="" class="view-more">View all messages</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown top-nav__notifications">
                        <a href="" data-toggle="dropdown" class="top-nav__notify">
                            <i class="zmdi zmdi-notifications"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="listview listview--hover">
                                <div class="listview__header">
                                    Notifications

                                    <div class="actions">
                                        <a href="" class="actions__item zmdi zmdi-check-all" data-ma-action="notifications-clear"></a>
                                    </div>
                                </div>

                                <div class="listview__scroll scrollbar-inner">
                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Glenn Jecobs</div>
                                            <p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Bill Phillips</div>
                                            <p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">David Belle</div>
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Jonathan Morris</div>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </a>

                                    <a href="" class="listview__item">
                                        <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading">Fredric Mitchell Jr.</div>
                                            <p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
                                        </div>
                                    </a>
                                </div>

                                <div class="p-1"></div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="listview listview--hover">
                                <div class="listview__header">Tasks</div>

                                <a href="" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading mb-2">HTML5 Validation Report</div>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading mb-2">Google Chrome Extension</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading mb-2">Social Intranet Projects</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading mb-2">Bootstrap Admin Template</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading mb-2">Youtube Client App</div>

                                        <div class="progress">
                                            <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="view-more">View all tasks</a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-calendar"></i>
                                    <small class="">Calendar</small>
                                    <span class="app-shortcuts__helper bg-red"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-file-text"></i>
                                    <small class="">Files</small>
                                    <span class="app-shortcuts__helper bg-blue"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-email"></i>
                                    <small class="">Email</small>
                                    <span class="app-shortcuts__helper bg-teal"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-trending-up"></i>
                                    <small class="">Reports</small>
                                    <span class="app-shortcuts__helper bg-blue-grey"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-view-headline"></i>
                                    <small class="">News</small>
                                    <span class="app-shortcuts__helper bg-orange"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-image"></i>
                                    <small class="">Gallery</small>
                                    <span class="app-shortcuts__helper bg-light-green"></span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-item theme-switch">
                                Theme Switch

                                <div class="btn-group btn-group-toggle btn-group--colors" data-toggle="buttons">
                                    <label class="btn bg-green active"><input type="radio" value="green" autocomplete="off" checked></label>
                                    <label class="btn bg-blue"><input type="radio" value="blue" autocomplete="off"></label>
                                    <label class="btn bg-red"><input type="radio" value="red" autocomplete="off"></label>
                                    <label class="btn bg-orange"><input type="radio" value="orange" autocomplete="off"></label>
                                    <label class="btn bg-teal"><input type="radio" value="teal" autocomplete="off"></label>

                                    <div class="clearfix mt-2"></div>

                                    <label class="btn bg-cyan"><input type="radio" value="cyan" autocomplete="off"></label>
                                    <label class="btn bg-blue-grey"><input type="radio" value="blue-grey" autocomplete="off"></label>
                                    <label class="btn bg-purple"><input type="radio" value="purple" autocomplete="off"></label>
                                    <label class="btn bg-indigo"><input type="radio" value="indigo" autocomplete="off"></label>
                                    <label class="btn bg-brown"><input type="radio" value="brown" autocomplete="off"></label>
                                </div>
                            </div>
                            <a href="" class="dropdown-item">Fullscreen</a>
                            <a href="" class="dropdown-item">Clear Local Storage</a>
                        </div>
                    </li>

                    <li class="hidden-xs-down">
                        <a href="" data-ma-action="aside-open" data-ma-target=".chat" class="top-nav__notify">
                            <i class="zmdi zmdi-comment-alt-text"></i>
                        </a>
                    </li>
                </ul>
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                           
                        </div>

                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="/">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="navigation__active"><a href="#"><i class="zmdi zmdi-home"></i> Home</a></li>

                       

                        <li><a href="{{ url('reportes')}}"><i class="zmdi zmdi-format-underlined"></i>Reportes</a></li>

                        <li class="navigation__sub">
                            <a href="{{ url('graficaspie')}}"><i class="zmdi zmdi-trending-up"></i> Graficas</a>

                            <ul>
                                <li><a href="{{ url('graficaspie')}}">Eventos y Asistencia</a></li>
                                <li><a href="{{ url('graficaspie')}}">Grafica de comportamiento</a></li>
                            </ul>
                        </li>

                      </ul>
                </div>
            </aside>

            <aside class="chat">
                <div class="chat__header">
                    <h2 class="chat__title">Chat <small>Currently 20 contacts online</small></h2>

                    <div class="chat__search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>

                <div class="scrollbar-inner">
                    <div class="listview listview--hover chat__buddies">
                        <a class="listview__item chat__available">
                            <img src="demo/img/profile-pics/7.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>hey, how are you doing.</p>
                            </div>
                        </a>

                        <a class="listview__item chat__available">
                            <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>hmm...</p>
                            </div>
                        </a>

                        <a class="listview__item chat__away">
                            <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>all good</p>
                            </div>
                        </a>

                        <a class="listview__item">
                            <img src="demo/img/profile-pics/8.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>morbi leo risus portaac consectetur vestibulum at eros.</p>
                            </div>
                        </a>

                        <a class="listview__item">
                            <img src="demo/img/profile-pics/6.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>fusce dapibus</p>
                            </div>
                        </a>

                        <a class="listview__item chat__busy">
                            <img src="demo/img/profile-pics/9.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>cras mattis consectetur purus sit amet fermentum.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="messages.html" class="btn btn--action btn--fixed btn-danger"><i class="zmdi zmdi-plus"></i></a>
            </aside>

            <section class="content">
                <header class="content__title">
                    <h1>Dashboard</h1>
                   

                    <div class="actions">
                        <a href="" class="actions__item zmdi zmdi-trending-up"></a>
                        <a href="" class="actions__item zmdi zmdi-check-all"></a>

                        <div class="dropdown actions__item">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="" class="dropdown-item">Refresh</a>
                                <a href="" class="dropdown-item">Manage Widgets</a>
                                <a href="" class="dropdown-item">Settings</a>
                            </div>
                        </div>
                    </div>
                </header>

                       
        <section id="about" class="section-padding">
            <div class="container">
                <div class="vertical-tab">
              <div class="row">
                              

                             <div class="col-sm-9">
                             <!-- Tab panes -->
                                      <h2>Eventos</h2>
                                   <ul class="nav nav-tabs">

                                      <li class="active"><a data-toggle="tab" href="#home">Mapa del Sitio</a></li>
                                    @foreach ($evento as $ev)
                                      <li><a data-toggle="tab" href="#{{ $ev['id']}}">{{ $ev['name']}}</a></li>
                                      
                                      @endforeach
                                    </ul>

                                    <div class="tab-content">
                                      <div id="home" class="tab-pane fade in active">
                                        <h3>Mapa</h3>
                                        <p>Instrucciones breves del sitio</p>
                                      </div>
                                      @foreach ($evento as $ev)
                                      <div id="{{ $ev['id']}}" class="tab-pane fade">
                                        
                                        @foreach($holis as $responseItem)
                                            {!! Form::open(['id'=>'formulario', 'name'=>'formulario', 'method'=>'POST'])!!}
                                                     <div class="col-sm-2">
                                                        
                                                            <input type="text" name="eventonombre" id="eventonombre" hidden="true" value="{{ $responseItem['event']['name'] }}, ID:{{ $responseItem['event']['id'] }}"  hidden="true"/>
                                                            <input type="text" name="eventodireccion" id="eventodireccion" hidden="true" value="Pais:{{ $responseItem['venue']['localized_country_name']}}, Ciudad:{{ $responseItem['venue']['city']}},En:{{ $responseItem['venue']['address_1']}}, {{ $responseItem['venue']['name']}} "  hidden="true"/>
                                                                <h3>Direccion del evento</h3>
                                                                
                                                                    <a href="#" title="Status:" data-toggle="popover" data-trigger="hover" data-content="{{ $ev['status']}} ">Pais:{{ $responseItem['venue']['localized_country_name']}}, Ciudad:{{ $responseItem['venue']['city']}},En:{{ $responseItem['venue']['address_1']}}, {{ $responseItem['venue']['name']}} 

                                                                    </a>
                                                              
                                                        </div>
                                                         <div class="col-sm-4">
                                                                    <h3>Check in del Evento </h3>
                                                                            @foreach($holis as $responseItem)
                                                                                    <?php //echo(json_encode($responseItem));  ?>
                                                                                <input type="text" name="miembrosdeevento" id="miembrosdeevento" value="{{ $responseItem['member']['name'] }}, ID:{{ $responseItem['member']['member_id'] }}" hidden="true"/>
                                                                                @endforeach   
                                                                                        @foreach($holis as $responseItem)
                                                                                       

                                                                                       <table id="example" class="hola display select" cellspacing="0" width="100%">
                                                                                       <thead>
                                                                                          <tr>
                                                                                             <th><input type="checkbox" name="select_all" value="1" id="holaexample-select-all"></th>
                                                                                             <th>Name</th>
                                                                                             <th>Position</th>
                                                                                             <th>Office</th>
                                                                                             <th>Extn.</th>
                                                                                             <th>Start date</th>
                                                                                             <th>Salary</th>
                                                                                          </tr>
                                                                                       </thead>
                                                                                       <tbody>
                                                                                       @foreach($holis as $responseItem)
                                                                                           <tr>
                                                                                               <th></th>
                                                                                               <th>{{$responseItem['member']['name'] }}</th>
                                                                                               <th>tecnico</th>
                                                                                               <th>gob</th>
                                                                                               <th>4564</th>
                                                                                               <th>17082018</th>
                                                                                               <th>445</th>
                                                                                           </tr>
                                                                                           @endforeach  
                                                                                       </tbody>
                                                                                       <tfoot>
                                                                                          <tr>
                                                                                             <th></th>
                                                                                             <th>Name</th>
                                                                                             <th>Position</th>
                                                                                             <th>Office</th>
                                                                                             <th>Extn.</th>
                                                                                             <th>Start date</th>
                                                                                             <th>Salary</th>
                                                                                          </tr>
                                                                                       </tfoot>
                                                                                    </table>
                                                                                    @endforeach
                                                                                      <!--   <label class="checkbox-inline">
                                                                                     
                                                                                      <input type="checkbox" name="asistencia" id="asistencia" value=" {{ $responseItem['member']['name'] }} Asistió" style="    margin-left: 48px !important;"> Llegó</label> -->
                                                                                    
                                                         </div>
                                                        <!--  modal  y boton de guardar -->
                                                         <div class="col-md-6">
                                                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">¿No está en meetup?</button>
                                                                <!-- Modal -->
                                                                  <div class="modal fade" id="myModal" name="myModal" role="dialog">
                                                                    <div class="modal-dialog">
                                                                    
                                                                      <!-- Modal content-->
                                                                      <div class="modal-content col-md-14">
                                                                            <div class="modal-header">
                                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                              <h4 class="modal-title">Check in Usuario Que no está meetup</h4>
                                                                            </div>
                                                                            <div class="col-md-11">
                                                                            <div class="modal-body">
                                                                               
                                                                                    <div class="form-group">
                                                                                      <label for="nombre">Nombre Completo</label>
                                                                                      <input type="text" class="form-control" id="nombre" name="nombre" required="true">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                      <label for="Email">Correo:</label>
                                                                                      <input type="Email" class="form-control" id="Email" name="Email" required="true">
                                                                                    </div>
                                                                                     <div class="form-group">
                                                                                      <label for="numero">Numero de contacto:</label>
                                                                                      <input type="Numero" class="form-control" id="numero" name="numero" required="true">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                      <label for="facebook">Facebook</label>
                                                                                      <input type="text" class="form-control" id="facebook" name="facebook" required="true">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                      <label for="Twitter">Twitter</label>
                                                                                      <input type="text" class="form-control" id="Twitter" name="Twitter">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                      <label for="instagram">Instagram</label>
                                                                                      <input type="text" class="form-control" id="instagram" name="instagram">
                                                                                    </div>
                                                                                
                                                                            </div>
                                                                            </div>
                                                                            <div class="modal-footer col-md-6">
                                                                              <button type="button" class="btn btn-default" data-dismiss="modal">Guardar Y salir</button>
                                                                            </div>
                                                                      </div>
                                                                      
                                                                    </div>
                                                                  </div>
  

                                                            <input type="submit" href="guardar" class="btn btn-info" value="guardar" onclick="alert('se ha guardado con exito la informacion del envento')"    >
                                                       </div>
                                                    <!-- fin de modal y boton guardar -->

                                               {!! Form::close() !!}
                                         @endforeach
                                      </div>
                                      @endforeach
                                      
                                    </div>
                              </div>
                </div>
                </div>
            </div>
        </section>


   
  


               <!-- graficas  <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sales Statistics</h4>
                                <h6 class="card-subtitle">Vestibulum purus quam scelerisque, mollis nonummy metus</h6>

                                <div class="flot-chart flot-curved-line"></div>
                                <div class="flot-chart-legends flot-chart-legends--curved"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Growth Rate</h4>
                                <h6 class="card-subtitle">Commodo luctus nisi erat porttitor ligula eget lacinia odio semnec elit</h6>

                                <div class="flot-chart flot-line"></div>
                                <div class="flot-chart-legends flot-chart-legends--line"></div>
                            </div>
                        </div>
                    </div>
                </div> -->


                                                              
                                                                
                        
                                                                
                                                        
                                                           
                                                          








                <div data-columns>
                    <!--  tarjeta <div class="card">
                        <img class="card-img-top" src="demo/img/widgets/note.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Pellentesque Ligula Fringilla</h4>
                            <h6 class="card-subtitle">by Malinda Hollaway on 19th June 2015 at 09:10 AM</h6>

                            <p>Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra.</p>
                            <a href="" class="view-more text-left">View Article...</a>
                        </div>
                    </div> -->

                   <!-- visitantes  <div class="card widget-visitors">
                        <div class="card-body">
                            <h4 class="card-title">Realtime Visitors</h4>
                            <h6 class="card-subtitle">Nullam dolor isnibh ultricies vehicula adipiscing</h6>

                            <div class="widget-visitors__stats">
                                <div>
                                    <strong>23528</strong>
                                    <small>Visitor for last 24 hours</small>
                                </div>
                                <div>
                                    <strong>746</strong>
                                    <small>Visitors last 30 minutes</small>
                                </div>
                            </div>

                            <div class="widget-visitors__map map-visitors"></div>
                        </div>

                        <div class="listview listview--striped">
                            <div class="listview__item">
                                <div class="listview__content">
                                    <p>Sunday, September 4, 21:44:02 (2 Mins 56 Seconds)</p>

                                    <div class="listview__attrs">
                                        <span><img class="widget-visitors__country" src="demo/img/flags/United_States_of_America.png" alt=""> United States</span>
                                        <span>Firefox</span>
                                        <span>Mac OSX</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <p>Sunday, September 4, 20:21:01 (5 Mins 12 Seconds)</p>

                                    <div class="listview__attrs">
                                        <span><img class="widget-visitors__country" src="demo/img/flags/Australia.png" alt=""> Australia</span>
                                        <span>Chrome</span>
                                        <span>Android</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <p>Sunday, September 4, 20:21:10 (10 Mins 43 Seconds)</p>

                                    <div class="listview__attrs">
                                        <span><img class="widget-visitors__country" src="demo/img/flags/Brazil.png" alt=""> Brazil</span>
                                        <span>Edge</span>
                                        <span>Windows</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <p>Sunday, September 4, 20:59:04 (1 Min 02 Seconds)</p>

                                    <div class="listview__attrs">
                                        <span><img class="widget-visitors__country" src="demo/img/flags/South_Korea.png" alt=""> South Korea</span>
                                        <span>Chrome</span>
                                        <span>Android</span>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="listview__content">
                                    <p>Sunday, September 4, 20:58:12 (3 Min 44 Seconds)</p>

                                    <div class="listview__attrs">
                                        <span><img class="widget-visitors__country" src="demo/img/flags/Japan.png" alt=""> Japan</span>
                                        <span>Chrome</span>
                                        <span>Windows</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2"></div>
                        </div>
                    </div> -->

                    <!-- ias pasados <div class="card card--inverse widget-past-days">
                        <div class="card-body">
                            <h4 class="card-title">For the past 30 days</h4>
                            <h6 class="card-subtitle">Pellentesque ornare sem lacinia quam</h6>
                        </div>

                        <div class="widget-past-days__main">
                            <div class="flot-chart flot-chart--sm flot-past-days"></div>
                        </div>

                        <div class="listview listview--inverse listview--striped">
                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Page Views</small>
                                    <h3>47,896,536</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="sparkline-bar-stats">6,9,5,6,3,7,5,4,6,5,6,4,2,5,8,2,6,9</div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Site Visitors</small>
                                    <h3>24,456,799</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="sparkline-bar-stats">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Total Clicks</small>
                                    <h3>13,965</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="sparkline-bar-stats">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Total Returns</small>
                                    <h3>198</h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="sparkline-bar-stats">3,9,1,3,5,6,7,6,8,2,5,2,7,5,6,7,6,8</div>
                                </div>
                            </div>
                        </div>
                    </div>
 -->
                    <!-- calendario <div class="card widget-calendar">
                        <div class="widget-calendar__header">
                            <div class="widget-calendar__year"></div>
                            <div class="widget-calendar__day"></div>

                            <div class="actions actions--inverse">
                                <a href="calendar.html" class="actions__item"><i class="zmdi zmdi-refresh-alt"></i></a>
                                <a href="calendar.html" class="actions__item"><i class="zmdi zmdi-plus"></i></a>
                            </div>
                        </div>

                        <div class="widget-calendar__body"></div>
                    </div -->>
<!-- 
                    <div class="card card--inverse widget-pie">
                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="50" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">92</span>
                            </div>
                            <div class="widget-pie__title">Email<br> Scheduled</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="11" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">11</span>
                            </div>
                            <div class="widget-pie__title">Email<br> Bounced</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="52" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">52</span>
                            </div>
                            <div class="widget-pie__title">Email<br> Opened</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="44" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">44</span>
                            </div>
                            <div class="widget-pie__title">Storage<br>Remaining</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="78" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">78</span>
                            </div>
                            <div class="widget-pie__title">Web Page<br> Views</div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                            <div class="easy-pie-chart" data-percent="32" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                                <span class="easy-pie-chart__value">32</span>
                            </div>
                            <div class="widget-pie__title">Server<br> Processing</div>
                        </div>
                    </div> -->

                   <!-- hacer lista <div class="card todo">
                        <div class="card-body">
                            <h4 class="card-title">Todo lists</h4>
                            <h6 class="card-subtitle">Venenatis portauam Inceptos ameteiam</h6>
                        </div>

                        <div class="listview">
                            <div class="listview__item">
                                <div class="custom-control custom-control--char todo__item">
                                    <input type="checkbox" class="custom-control-input" id="todo-1">
                                    <label class="custom-control-label-char" for="todo-1">
                                        <i class="bg-amber">P</i>
                                        <div class="todo__info">
                                            <span>Fivamus sagittis lacus vel augue laoreet rutrum faucibus dolor</span>
                                            <small>Today at 8.30 AM</small>
                                        </div>

                                        <div class="listview__attrs">
                                            <span>#Messages</span>
                                            <span>!!!</span>
                                        </div>
                                    </label>
                                </div>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Mark as completed</a>
                                            <a class="dropdown-item" href="">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="custom-control custom-control--char todo__item">
                                    <input  type="checkbox" class="custom-control-input" id="todo-2">
                                    <label class="custom-control-label-char" for="todo-2">
                                        <i class="bg-light-blue">N</i>
                                        <div class="todo__info">
                                            <span>Nullam id dolor id nibh ultricies vehicula ut id elit</span>
                                            <small>Today at 12.30 PM</small>
                                        </div>

                                        <div class="listview__attrs">
                                            <span>#Clients</span>
                                            <span>!!</span>
                                        </div>
                                    </label>
                                </div>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Mark as completed</a>
                                            <a class="dropdown-item" href="">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="custom-control custom-control--char todo__item">
                                    <input  type="checkbox" class="custom-control-input" id="todo-3">
                                    <label class="custom-control-label-char" for="todo-3">
                                        <i class="bg-purple">C</i>
                                        <div class="todo__info">
                                            <span>Cras mattis consectetur purus sit amet fermentum</span>
                                            <small>Tomorrow at 10.30 AM</small>
                                        </div>

                                        <div class="listview__attrs">
                                            <span>#Clients</span>
                                            <span>!!</span>
                                        </div>
                                    </label>
                                </div>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Mark as completed</a>
                                            <a class="dropdown-item" href="">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="custom-control custom-control--char todo__item">
                                    <input  type="checkbox" class="custom-control-input" id="todo-4">
                                    <label class="custom-control-label-char" for="todo-4">
                                        <i class="bg-lime">I</i>
                                        <div class="todo__info">
                                            <span>Integer posuere erat a ante venenatis dapibus posuere velit aliquet</span>
                                            <small>05/08/2017 at 08.00 AM</small>
                                        </div>

                                        <div class="listview__attrs">
                                            <span>#Server</span>
                                            <span>!</span>
                                        </div>
                                    </label>
                                </div>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Mark as completed</a>
                                            <a class="dropdown-item" href="">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="custom-control custom-control--char todo__item">
                                    <input  type="checkbox" class="custom-control-input" id="todo-5">
                                    <label class="custom-control-label-char" for="todo-5">
                                        <i class="bg-red">P</i>
                                        <div class="todo__info">
                                            <span>Praesent commodo cursus magnavel scelerisque nisl consectetur</span>
                                            <small>10/08/2016 at 04.00 AM</small>
                                        </div>

                                        <div class="listview__attrs">
                                            <span>#Server</span>
                                            <span>!!!</span>
                                        </div>
                                    </label>
                                </div>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Mark as completed</a>
                                            <a class="dropdown-item" href="">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="todos.html" class="view-more">View More</a>
                        </div>
                    </div> -->

                    <!-- proceso <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Server Process Data</h4>
                            <h6 class="card-subtitle">Fusce dapibus tellus cursus commodo tortor</h6>

                            <div class="flot-chart flot-dynamic"></div>
                        </div>
                    </div> -->
                </div>

                <footer class="footer hidden-xs-down">
                    <p>© Material Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="">Homepage</a>

                        <a class="nav-link" href="">Company</a>

                        <a class="nav-link" href="">Support</a>

                        <a class="nav-link" href="">News</a>

                        <a class="nav-link" href="">Contacts</a>
                    </ul>
                </footer>
            </section>
</main>

        
        
 
@endsection