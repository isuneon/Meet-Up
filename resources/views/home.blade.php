<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@extends('layouts.app')
@section('content')
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
<div class="page-header -i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler ">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>			
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

				<!-- SELECT LANGUAGE -->	
				<li class="dropdown dropdown-language">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="assets/global/img/flags/es.png">						
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu">
							<li>
								<a href="javascript:;">
								<img alt="" src="assets/global/img/flags/us.png">US</a>
							</li>
						</ul>
				</li>	

				<!-- ALERTS MESSAGE -->		
				<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-bell"></i>
					<span class="badge badge-default"> 4 </span>
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3><span class="bold">4 pending</span> notifications</h3>
							<a href="extra_profile.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;">
									<span class="time">just now</span>
									<span class="details">
									<span class="label label-sm label-icon label-success">
									<i class="fa fa-plus"></i>
									</span>
									New user registered. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">3 mins</span>
									<span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Server #12 overloaded. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">10 mins</span>
									<span class="details">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Server #2 not responding. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">14 hrs</span>
									<span class="details">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									Application error. </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
			
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="assets/admin/layout/img/avatar3_small.jpg"/>
					<!-- <span class="username username-hide-on-mobile"></span>-->

					<span class="username username-hide-on-mobile">Usuario Autenticado</span>
					<!-- <php  \Session::get('sNombre');  >  -->
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>

						<li>
							<a href="logout">
							<i class="icon-logout"></i> Cerrar Sesión </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>

	<div class="row">
	  <div class="col-md-12">
	      	<div class="tabbable-line boxless tabbable-reversed">
		         	<ul class="nav nav-tabs">
		               <li class="active">
		                 <a href="#tab_0" data-toggle="tab" aria-expanded="true">
		                                Eventos </a>
		              		</li>
		                  <li class="">
		                 <a href="#tab_1" data-toggle="tab" aria-expanded="false">
		                                Grupos </a>
		                            </li>
		            		<li>
		                    <a href="#tab_2" data-toggle="tab">
		                                Temas </a>
		            		 </li>
		                      <li>
		                        <a href="#tab_3" data-toggle="tab">
		                        Elementos</a>
		                      </li>                            
		                       <li>
		                         <a href="#tab_3" data-toggle="tab">
		                                Elementos</a>
		                        </li>        
		                          <li>
		                           <a href="#tab_3" data-toggle="tab">
		                                Elementos</a>
		                         </li>        
					</ul>
	                        
	             <div class="tab-content">
	                                                    <!--
	                            <div class="portlet box blue">
	                            <div class="portlet light bordered">
	                            <div class="portlet light bg-inverse">
	                            <div class="portlet box green">
	                            <div class="row">
	                            -->
	                            <div class="tab-pane active" id="tab_0">
	                                <div class="portlet box blue">

	                                    <div class="portlet-body form">
	                                        <!-- BEGIN FORM--> 
	                                            <form role="form">
	                                                    <div class="form-body">
	                                                       
	                                                       

	                                                          @foreach ($evento as $ev)
                         										
                        
                      									  		<div class="infoevento" id="infoevento">
											                        <?php  
											                           //dd($ev);

											                        ?>
											                         <form action="#" method="post">
											                               <label for="name">Nombre </label>
											                                <div class="name" id="name" name="name"  >
											                                <input  name="name" id="name" value="<?php
											                                         echo($ev['name']); 
											                                       ?>"  hidden="true" />
											                                      <?php
											                                         echo($ev['name']. "<br>"); 
											                                       ?>
											                                </div>
											                                 
											                              <div class="pais">
											                              <label for="pais">Pais </label>
											                                <input type="text" name="pais" id="pais" hidden="true" value="<?php
											                                   print_r($ev['venue']['localized_country_name']); 
											                                           
											                                  ?>"  hidden="true"/>

											                                 <?php
											                                   print_r($ev['venue']['localized_country_name']. "<br>"); 
											                                           
											                                  ?>
											                              </div>
											                                <div class="Ciudad">
											                                  <label for="ciudad">Ciudad </label>
											                                   <input type="text" name="ciudad" id="ciudad" hidden="true" value="<?php
											                                           print_r($ev['venue']['city']); 
											                                                   
											                                          ?>"  hidden="true"/>
											                                      <?php
											                                     print_r($ev['venue']['city']. "<br>"); 
											                                      ?>
											                                </div>
											                                <div class="direccion">
											                                <label for="direccion">direccion direccion del evento </label>
											                                <input type="text" name="direccion" id="direccion" hidden="true" value="<?php
											                                           print_r($ev['venue']['address_1']. " en " .$ev['venue']['name']); 
											                                                   
											                                          ?>"  hidden="true"/>
											                                  <?php
											                                   print_r($ev['venue']['address_1']. " en " .$ev['venue']['name'] . "<br>"); 
											                                  ?>
											                                </div>

											                                <div class="status">
											                                 <label for="status">status del evento</label>
											                                 <input type="text" name="status" id="status"  value="<?php
											                                                    print_r($ev['status']); 
											                                                           
											                                                  ?>"  hidden="true"/>
											                                  <?php
											                                   print_r($ev['status']. "<br>"); 
											                                    ?>
											                                </div>
											                                <label for="miembros">miembros del evento </label>
											                               
															                    <div>
															                    @foreach($responsem as $responseItem)
																                    <div>
																                    <?php  
																                       echo $responseItem['member']['name'] . PHP_EOL .  "<br>";
																        				?>
																                    </div>
															                    	<label>¿asistio?</label>
																	                 
															                        @endforeach
																				   
															                    </div>
											                                	<p>
											                                    <input type="submit" value="guardar" href="guardar"  />
											                                    </p>

											                            
											                        </form>
                            

                        										</div>
                         								
                         									@endforeach
														</div>
	                                                   <!--  <div class="form-actions noborder">
	                                                        <button type="button" class="btn btn-circle blue">Submit</button>
	                                                        <button type="button" class="btn btn-circle default">Cancel</button>
	                                                    </div>
 --><!-- 
	                                                    <div class="form-actions">
	                                                        <div class="row">
	                                                            <div class="col-md-offset-3 col-md-9">
	                                                                <button type="submit" class="btn btn-circle blue">Submit</button>
	                                                                <button type="button" class="btn btn-circle default">Cancel</button>
	                                                            </div>
	                                                        </div>
	                                                    </div>       -->                                              
	                                            </form>
	                                        <!-- END FORM-->
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="tab-pane" id="tab_1">
	                                <div class="portlet box blue">

	                                    <div class="portlet-body form">
	                                        <!-- BEGIN FORM-->
	                                        <form action="#" class="horizontal-form">
	                                            <div class="form-body">
	                                                <h3 class="form-section">Person Info</h3>
	                                                <div class="row">
	                                                    <div class="col-md-6">
	                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                            <input type="text" class="form-control" id="form_control_1">
	                                                            <label for="form_control_1">Nombre</label>
	                                                            <span class="help-block">Some help goes here...</span>
	                                                        </div>
	                                                    </div>
	                                                    <!--/span-->
	                                                    <div class="col-md-6">
	                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                            <input type="text" class="form-control" id="form_control_1">
	                                                            <label for="form_control_1">Apellido</label>
	                                                            <span class="help-block">Some help goes here...</span>
	                                                        </div>
	                                                    </div>
	                                                    <!--/span-->
	                                                </div>
	                                                <!--/row-->
	                                                <div class="row">
	                                                    <div class="col-md-6">
	                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                            <select class="form-control" id="form_control_1">
	                                                                <option value=""></option>
	                                                                <option value="">Option 1</option>
	                                                                <option value="">Option 2</option>
	                                                                <option value="">Option 3</option>
	                                                                <option value="">Option 4</option>
	                                                            </select>
	                                                            <label for="form_control_1">Dropdown sample</label>
	                                                        </div>
	                                                    </div>
	                                                    <!--/span-->

	                                                    <!--/span-->
	                                                </div>
	                                                <!--/row-->
	                                                <div class="row">
	                                                    <div class="col-md-6">
	                                                            <div class="md-checkbox-list">
	                                                                <div class="md-checkbox">
	                                                                    <input type="checkbox" id="checkbox1" class="md-check">
	                                                                    <label for="checkbox1">
	                                                                    <span></span>
	                                                                    <span class="check"></span>
	                                                                    <span class="box"></span>
	                                                                    Option 1 </label>
	                                                                </div>
	    
	                                                        </div>
	                                                    </div>
	                                                    <!--/span-->
	                                                    <div class="col-md-6">
	                                                        <div class="form-group">
	                                                            <label class="control-label">Membership</label>
	                                                            <div class="md-radio-list">
	                                                                <div class="md-radio">
	                                                                    <input type="radio" id="radio1" name="radio1" class="md-radiobtn">
	                                                                    <label for="radio1">
	                                                                    <span></span>
	                                                                    <span class="check"></span>
	                                                                    <span class="box"></span>
	                                                                    Option 1 </label>
	                                                                </div>
	                                                                <div class="md-radio">
	                                                                    <input type="radio" id="radio2" name="radio1" class="md-radiobtn" checked="">
	                                                                    <label for="radio2">
	                                                                    <span></span>
	                                                                    <span class="check"></span>
	                                                                    <span class="box"></span>
	                                                                    Option 2 </label>
	                                                                </div>                    
	                                                             </div>   
	                                                        </div>
	                                                    </div>
	                                                    <!--/span-->
	                                                </div>
	                                                <!--/row-->
	                                                <h3 class="form-section">Address</h3>
	                                                <div class="row">
	                                                    <div class="col-md-12 ">
	                                                       <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                            <input type="text" class="form-control" id="form_control_1">
	                                                            <label for="form_control_1">Street</label>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <div class="row">
	                                                    <div class="col-md-6">
	                                                       <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                            <input type="text" class="form-control" id="form_control_1">
	                                                            <label for="form_control_1">Ciudad</label>
	                                                        </div>
	                                                    </div>
	                                                    <!--/span-->
	                                                    <div class="col-md-6">
	                                                       <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                            <input type="text" class="form-control" id="form_control_1">
	                                                            <label for="form_control_1">Estado</label>
	                                                        </div>
	                                                    </div>
	                                                    <!--/span-->
	                                                </div>
	                                                <!--/row-->

	                                            </div>
	                                            <div class="form-actions right">
	                                                <button type="submit" class="btn btn-circle blue"><i class="fa fa-check"></i> Save</button>
	                                                <button type="button" class="btn btn-circle default">Cancel</button>
	                                            </div>
	                                        </form>
	                                        <!-- END FORM-->
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="tab-pane" id="tab_2">


	                                <div class="row">
	                                    <!-- BEGIN FILA-->
	                                    <div class="col-md-6 ">

	                                        <!-- BEGIN SAMPLE FORM PORTLET-->
	                                        
	                                        <div class="portlet light bordered">
	                                            <div class="portlet-title">
	                                                <div class="caption font-red-sunglo">
	                                                    <i class="icon-drop font-red-sunglo"></i>
	                                                    <span class="caption-subject bold uppercase"> Radios</span>
	                                                </div>
	                                            </div>

	                                            <div class="portlet-body">
	                                                 <form role="form" class="margin-bottom-40">
	                                                    <div class="row">
	                                                        <div class="col-md-4">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-md-4">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-md-4">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </form>
	                                            </div>
	                                        </div>
	                                        <!-- END SAMPLE FORM PORTLET-->
	                                    </div>

	                                    <div class="col-md-6 ">

	                                        <!-- BEGIN SAMPLE FORM PORTLET-->
	                                        
	                                        <div class="portlet light bordered">
	                                            <div class="portlet-title">
	                                                <div class="caption font-red-sunglo">
	                                                    <i class="icon-drop font-red-sunglo"></i>
	                                                    <span class="caption-subject bold uppercase"> Radios</span>
	                                                </div>
	                                            </div>

	                                            <div class="portlet-body form">
	                                                 <form role="form" class="margin-bottom-40">
	                                                    <div class="row">
	                                                        <div class="col-md-6">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-md-6">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </form>
	                                            </div>
	                                        </div>
	                                        <!-- END SAMPLE FORM PORTLET-->
	                                    </div>  
	                                    <!-- END FILA-->                                  
	                                </div>  

	                                <div class="row">
	                                    <!-- BEGIN FILA-->
	                                    <div class="col-md-12 ">

	                                        <!-- BEGIN SAMPLE FORM PORTLET-->
	                                        
	                                        <div class="portlet light bordered">
	                                            <div class="portlet-title">
	                                                <div class="caption font-red-sunglo">
	                                                    <i class="icon-drop font-red-sunglo"></i>
	                                                    <span class="caption-subject bold uppercase"> Radios</span>
	                                                </div>
	                                            </div>

	                                            <div class="portlet-body form">
	                                                 <form role="form" class="margin-bottom-40">
	                                                    <div class="row">
	                                                        <div class="col-md-12">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                    </div>                                                 

	                                                    <div class="row">
	                                                        <div class="col-md-6">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-md-6">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                    </div>


	                                                </form>
	                                            </div>
	                                        </div>
	                                        <!-- END SAMPLE FORM PORTLET-->
	                                    </div>
	                                    <!-- END FILA-->                                                               
	                                </div>         

	                                <div class="row">
	                                    <!-- BEGIN FILA-->
	                                    <div class="col-md-4 ">

	                                        <!-- BEGIN SAMPLE FORM PORTLET-->
	                                        
	                                        <div class="portlet light bordered">
	                                            <div class="portlet-title">
	                                                <div class="caption font-red-sunglo">
	                                                    <i class="icon-drop font-red-sunglo"></i>
	                                                    <span class="caption-subject bold uppercase"> Radios</span>
	                                                </div>
	                                            </div>

	                                            <div class="portlet-body form">
	                                                 <form role="form" class="margin-bottom-40">
	                                                    <div class="row">
	                                                        <div class="col-md-6">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-md-6">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </form>

	                                            </div>
	                                        </div>
	                                        <!-- END SAMPLE FORM PORTLET-->
	                                    </div>    

	                                    <div class="col-md-4 ">

	                                        <!-- BEGIN SAMPLE FORM PORTLET-->
	                                        
	                                        <div class="portlet light bordered">
	                                            <div class="portlet-title">
	                                                <div class="caption font-red-sunglo">
	                                                    <i class="icon-drop font-red-sunglo"></i>
	                                                    <span class="caption-subject bold uppercase"> Radios</span>
	                                                </div>
	                                            </div>

	                                            <div class="portlet-body form">
	                                                 <form role="form" class="margin-bottom-40">
	                                                    <div class="row">
	                                                        <div class="col-md-6">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-md-6">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </form>

	                                            </div>
	                                        </div>
	                                        <!-- END SAMPLE FORM PORTLET-->
	                                    </div> 

	                                    <div class="col-md-4 ">

	                                        <!-- BEGIN SAMPLE FORM PORTLET-->
	                                        
	                                        <div class="portlet light bordered">
	                                            <div class="portlet-title">
	                                                <div class="caption font-red-sunglo">
	                                                    <i class="icon-drop font-red-sunglo"></i>
	                                                    <span class="caption-subject bold uppercase"> Radios</span>
	                                                </div>
	                                            </div>

	                                            <div class="portlet-body form">
	                                                 <form role="form" class="margin-bottom-40">
	                                                    <div class="row">
	                                                        <div class="col-md-6">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-md-6">
	                                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                                            <input type="text" class="form-control" id="form_control_8">
	                                                                            <label for="form_control_1">Nombre</label>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </form>

	                                            </div>
	                                        </div>
	                                        <!-- END SAMPLE FORM PORTLET-->
	                                    </div>  
	                                    <!-- END FILA-->                                                                                                 
	                                </div>                                                           
	                            </div>
	                                
	                            <div class="tab-pane" id="tab_3">
	                                <div class="row">
	                                    <div class="col-md-6 ">

	                                        <!-- BEGIN SAMPLE FORM PORTLET  -->
	                                        <!-- CheckBoxes  -->
	                                        <div class="portlet light bordered">
	                                            <div class="portlet-title">
	                                                <div class="caption font-red-sunglo">
	                                                    <i class="icon-check font-red-sunglo"></i>
	                                                    <span class="caption-subject bold uppercase"> Checkboxes</span>
	                                                </div>
	                                            </div>
	                                            <div class="portlet-body form">
	                                                <form role="form">
	                                                    <div class="form-group form-md-checkboxes">
	                                                        <label>Checkboxes</label>
	                                                        <div class="md-checkbox-list">
	                                                            <div class="md-checkbox">
	                                                                <input type="checkbox" id="checkbox1" class="md-check">
	                                                                <label for="checkbox1">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 1 </label>
	                                                            </div>
	                                                            <div class="md-checkbox">
	                                                                <input type="checkbox" id="checkbox2" class="md-check" checked="">
	                                                                <label for="checkbox2">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 2 </label>
	                                                            </div>
	                                                            <div class="md-checkbox">
	                                                                <input type="checkbox" id="checkbox3" class="md-check">
	                                                                <label for="checkbox3">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 3 </label>
	                                                            </div>
	                                                            <div class="md-checkbox">
	                                                                <input type="checkbox" id="checkbox4" disabled="" class="md-check">
	                                                                <label for="checkbox4">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Disabled </label>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                    <div class="form-group form-md-checkboxes">
	                                                        <label>Inline Checkboxes</label>
	                                                        <div class="md-checkbox-inline">
	                                                            <div class="md-checkbox">
	                                                                <input type="checkbox" id="checkbox6" class="md-check">
	                                                                <label for="checkbox6">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 1 </label>
	                                                            </div>
	                                                            <div class="md-checkbox">
	                                                                <input type="checkbox" id="checkbox7" class="md-check" checked="">
	                                                                <label for="checkbox7">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 2 </label>
	                                                            </div>
	                                                            <div class="md-checkbox">
	                                                                <input type="checkbox" id="checkbox8" class="md-check">
	                                                                <label for="checkbox8">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 3 </label>
	                                                            </div>
	                                                        </div>
	                                                    </div>

	                                                </form>
	                                            </div>
	                                        </div>
	                                        <!-- END SAMPLE FORM PORTLET-->
	                                    </div>
	                                    <div class="col-md-6 ">
	                                        <!-- BEGIN SAMPLE FORM PORTLET-->
	                                        <div class="portlet light bordered">
	                                            <div class="portlet-title">
	                                                <div class="caption font-green">
	                                                    <i class="icon-pin font-green"></i>
	                                                    <span class="caption-subject bold uppercase"> Floating Labels</span>
	                                                </div>                                            
	                                            </div>

	                                            <div class="portlet-body form">
	                                                <form role="form">
	                                                    <div class="form-body">
	                                                        <div class="form-group form-md-line-input form-md-floating-label">
	                                                            <input type="text" class="form-control" id="form_control_1">
	                                                            <label for="form_control_1">Regular input</label>
	                                                            <span class="help-block">Some help goes here...</span>
	                                                        </div>

	                                                        <div class="form-group form-md-line-input form-md-floating-label has-success">
	                                                            <input type="text" class="form-control" id="form_control_1">
	                                                            <label for="form_control_1">Success input</label>
	                                                        </div>
	                                                        <div class="form-group form-md-line-input form-md-floating-label has-warning">
	                                                            <input type="text" class="form-control" id="form_control_1">
	                                                            <label for="form_control_1">Warning input</label>
	                                                        </div>
	                                                        <div class="form-group form-md-line-input form-md-floating-label has-error">
	                                                            <input type="text" class="form-control" id="form_control_1">
	                                                            <label for="form_control_1">Error input</label>
	                                                        </div>
	                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                            <input type="text" class="form-control" id="form_control_1">
	                                                            <label for="form_control_1">Info input</label>
	                                                        </div>
	                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                            <select class="form-control" id="form_control_1">
	                                                                <option value=""></option>
	                                                                <option value="">Option 1</option>
	                                                                <option value="">Option 2</option>
	                                                                <option value="">Option 3</option>
	                                                                <option value="">Option 4</option>
	                                                            </select>
	                                                            <label for="form_control_1">Dropdown sample</label>
	                                                        </div>
	                                                        <div class="form-group form-md-line-input form-md-floating-label">
	                                                            <textarea class="form-control" rows="3"></textarea>
	                                                            <label for="form_control_1">Textarea input</label>
	                                                        </div>
	                                                        <div class="form-group form-md-line-input form-md-floating-label has-error">
	                                                            <input type="text" class="form-control" disabled="" id="form_control_1">
	                                                            <label for="form_control_1">Disabled</label>
	                                                        </div>
	                                                        <div class="form-group form-md-line-input form-md-floating-label has-error">
	                                                            <input type="text" class="form-control edited" readonly="" value="You can't edit this" id="form_control_1">
	                                                            <label for="form_control_1">Readonly</label>
	                                                        </div>
	                                                        <div class="form-group form-md-line-input form-md-floating-label">
	                                                            <div class="form-control form-control-static">
	                                                                email@example.com
	                                                            </div>
	                                                            <label for="form_control_1">Static Control</label>
	                                                        </div>
	                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                            <input type="text" class="form-control input-sm" id="form_control_1">
	                                                            <label for="form_control_1">Small input</label>
	                                                        </div>
	                                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
	                                                            <input type="text" class="form-control input-lg edited" id="form_control_1">
	                                                            <label for="form_control_1">Large input</label>
	                                                        </div>
	                                                    </div>
	                                                    <div class="form-actions noborder">
	                                                        <button type="button" class="btn btn-circle blue">Submit</button>
	                                                        <button type="button" class="btn btn-circle default">Cancel</button>
	                                                    </div>

	                                                    <div class="form-actions">
	                                                        <div class="row">
	                                                            <div class="col-md-offset-3 col-md-9">
	                                                                <button type="submit" class="btn btn-circle blue">Submit</button>
	                                                                <button type="button" class="btn btn-circle red">Cancel</button>
	                                                            </div>
	                                                        </div>
	                                                    </div>                                                    
	                                                </form>
	                                            </div>
	                                        </div>
	                                        <!-- END SAMPLE FORM PORTLET-->
	                                       

	                                        <!-- BEGIN SAMPLE FORM PORTLET-->
	                                        <!-- Radios  -->                    
	                                        <div class="portlet light bordered">
	                                            <div class="portlet-title">
	                                                <div class="caption font-red-sunglo">
	                                                    <i class="icon-drop font-red-sunglo"></i>
	                                                    <span class="caption-subject bold uppercase"> Radios</span>
	                                                </div>
	                                                
	                                            </div>
	                                            <div class="portlet-body form">
	                                                <form role="form">
	                                                    <div class="form-group form-md-radios">
	                                                        <label>Checkboxes</label>
	                                                        <div class="md-radio-list">
	                                                            <div class="md-radio">
	                                                                <input type="radio" id="radio1" name="radio1" class="md-radiobtn">
	                                                                <label for="radio1">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 1 </label>
	                                                            </div>
	                                                            <div class="md-radio">
	                                                                <input type="radio" id="radio2" name="radio1" class="md-radiobtn" checked="">
	                                                                <label for="radio2">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 2 </label>
	                                                            </div>
	                                                            <div class="md-radio">
	                                                                <input type="radio" id="radio3" name="radio1" class="md-radiobtn">
	                                                                <label for="radio3">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 3 </label>
	                                                            </div>
	                                                            <div class="md-radio">
	                                                                <input type="radio" id="radio5" name="radio1" disabled="" class="md-radiobtn">
	                                                                <label for="radio5">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Disabled </label>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                    <div class="form-group form-md-radios">
	                                                        <label>Checkboxes</label>
	                                                        <div class="md-radio-inline">
	                                                            <div class="md-radio">
	                                                                <input type="radio" id="radio6" name="radio2" class="md-radiobtn">
	                                                                <label for="radio6">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 1 </label>
	                                                            </div>
	                                                            <div class="md-radio">
	                                                                <input type="radio" id="radio7" name="radio2" class="md-radiobtn" checked="">
	                                                                <label for="radio7">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 2 </label>
	                                                            </div>
	                                                            <div class="md-radio">
	                                                                <input type="radio" id="radio8" name="radio2" class="md-radiobtn">
	                                                                <label for="radio8">
	                                                                <span></span>
	                                                                <span class="check"></span>
	                                                                <span class="box"></span>
	                                                                Option 3 </label>
	                                                            </div>
	                                                        </div>
	                                                    </div>

	                                                </form>
	                                            </div>
	                                        </div>
	                                        <!-- END SAMPLE FORM PORTLET-->
	                                    </div>
	                                </div>
	                            </div>                            

	          	</div>
	       </div>
	   </div>
	</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
<script>
    $('#mySwitch').on('switch-change', function (e, data) {
    var $el = $(data.el)
      , value = data.value;
    console.log(e, $el, value);
});
</script>
 @endsection