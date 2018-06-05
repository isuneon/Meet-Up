@extends('layouts.app')

@section('footer')

<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
	<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
	<script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
	<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
	<script src="assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
	<script src="assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
	<script src="assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
	<script src="assets/admin/pages/scripts/charts-amcharts.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
	<script src="assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
	<script src="assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
	<script src="assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
	<script src="assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
	<script src="assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
	<script src="assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
	<script src="assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
	<script src="assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
	<script src="assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
	<script src="assets/global/plugins/tablas/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/tablas/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/tablas/js/dataTables.responsive.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/tablas/js/responsive.bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/tablas/js/responsive.bootstrap.min.js" type="text/javascript"></script>
	<script src="js/funciones.js"> </script>

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
<script src="../../../ajax.cloudflare.com/cdn-cgi/scripts/92209a86/cloudflare-static/rocket-loader.min.js" data-cf-nonce="5f2a35b307d5d1aef624d016-" defer="">
    
</script>
<script>
	jQuery(document).ready(function() {    
	   Metronic.init(); // init metronic core componets
	   Layout.init(); // init layout
	   Demo.init(); // init demo features    
	   Index.init(); // init index page
	   Tasks.initDashboardWidget(); // init tash dashboard widget  
	});
	</script>
@endseaction