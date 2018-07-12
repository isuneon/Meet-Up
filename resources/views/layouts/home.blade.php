<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
      <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
         <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Material Icons CSS -->
        <link href="{{ asset('css/material-icons.css') }}" rel="stylesheet">
        <!-- animate CSS -->
        <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
        <!-- flexslider -->
        <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
        <!-- materialize -->
        <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
        <!-- Bootstrap -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- shortcodes -->
        <link href="{{ asset('css/shortcodes.css') }}" rel="stylesheet">
        <!-- Style CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
         <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">
    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
        
</head>

 <body data-ma-theme="green">
    
    @yield('contenthome')
                     
   




</body>
    <footer>
        <!-- Javascript -->
        <!-- Vendors -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('js/jquery-scrollLock.min.js') }}"></script>
        <!-- <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
        <script src="{{ asset('js/jquery.flot.js') }}"></script>
        <script src="{{ asset('js/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('js/curvedLines.js') }}"></script>
        <script src="{{ asset('js/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.vmap.world.js') }}"></script>
        <script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('js/salvattore.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('js/moment.min.js') }}"></script>
        <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('js/datatables.min.js') }}"></script>
        <!-- Charts and maps-->
        <script src="js/curved-line.js"></script>
        <!-- <script src="js/dynamic.js"></script> -->
        <script src="js/line.js"></script>
        <script src="js/chart-tooltips.js"></script>
        <script src="js/other-charts.js"></script>
        <script src="js/jqvmap.js"></script>
        <script src="{{ asset('js/jquery.twbsPagination.min.js') }}"></script>
        <!-- App functions and actions -->
        <script src="{{ asset('js/app.min.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>

            <!-- Latest compiled and minified Locales -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-zh-CN.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
        
              
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

                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                    $('form').submit(function (e) {
                        e.preventDefault();
                        var data = $(this).serializeFormJSON();
                        console.log(data);
                        $.ajax({

                            type: 'POST',
                            url: '/guardar',
                            dataType : 'json',
                            data: data ,
                            success: function (msg) {
                                    console.log("Se ha realizado el POST con exito "+msg)
                            }
                        });
                    });
                   
                        function myFunction(id) {
                            var x = document.getElementById(id);
                            if (x.className.indexOf("w3-show") == -1) {
                                x.className += " w3-show";
                            } else { 
                                x.className = x.className.replace(" w3-show", "");
                            }
                        }

                        
                </script>
                <script>
                $(document).ready(function(){
                    $('[data-toggle="popover"]').popover();   
                });


                  $(document).ready(function (){
   var table = $('.hola').DataTable({
      
      'columnDefs': [{
         'targets': 0,
         'searchable': true,
         'orderable': true,
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
             return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
         }
      }],
      'order': [[1, 'asc']]
   });

   // Handle click on "Select all" control
   $('·holaexample-select-all').on('click', function(){
      // Get all rows with search applied
      var rows = table.rows({ 'search': 'applied' }).nodes();
      // Check/uncheck checkboxes for all rows in the table
      $('input[type="checkbox"]', rows).prop('checked', this.checked);
   });

   // Handle click on checkbox to set state of "Select all" control
   $('.hola tbody').on('change', 'input[type="checkbox"]', function(){
      // If checkbox is not checked
      if(!this.checked){
         var el = $('#holaexampleple-select-all').get(0);
         // If "Select all" control is checked and has 'indeterminate' property
         if(el && el.checked && ('indeterminate' in el)){
            // Set visual state of "Select all" control
            // as 'indeterminate'
            el.indeterminate = true;
         }
      }
   });

   // Handle form submission event
   $('#frm-example').on('submit', function(e){
      var form = this;

      // Iterate over all checkboxes in the table
      table.$('input[type="checkbox"]').each(function(){
         // If checkbox doesn't exist in DOM
         if(!$.contains(document, this)){
            // If checkbox is checked
            if(this.checked){
               // Create a hidden element
               $(form).append(
                  $('<input>')
                     .attr('type', 'hidden')
                     .attr('name', this.name)
                     .val(this.value)
               );
            }
         }
      });
   });

});
                </script>
    </footer>
</html>