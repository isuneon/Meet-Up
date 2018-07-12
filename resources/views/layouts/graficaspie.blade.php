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
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- shortcodes -->
        <link href="{{ asset('css/shortcodes.css') }}" rel="stylesheet">
        <!-- Style CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
         <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">
    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
        <style>
        #chartdiv {
          width: 100%;
          height: 500px;
        }   
        </style>
        <style>
            #char2tdiv {
                width       : 100%;
                height      : 500px;
                font-size   : 11px;
            }

            #chart3div {
              width: 100%;
              height: 500px;
            }                              
        </style>
</head>

 <body data-ma-theme="green">
    
    @yield('contentpie')
                     
   




</body>
    <footer>
        <!-- Javascript -->
        <!-- Vendors -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
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
        <script src="{{ asset('js/datatables.min.js') }}js/curved-line.js"></script>
        <!-- <script src="js/dynamic.js"></script> -->
        
        <script src="{{ asset('js/jquery.twbsPagination.min.js') }}"></script>
        <!-- App functions and actions -->
        <script src="{{ asset('js/app.min.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>

            <!-- Latest compiled and minified Locales -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-zh-CN.min.js"></script>
            <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
            <script src="https://www.amcharts.com/lib/3/pie.js"></script>

            <script src="https://www.amcharts.com/lib/3/serial.js"></script>
            <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
            <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
            <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
              
         <!-- Chart code -->
         <script>
           var chart = AmCharts.makeChart("chartdiv", {
              "type": "serial",
              "theme": "light",
              "legend": {
                  "equalWidths": false,
                  "useGraphSettings": true,
                  "valueAlign": "left",
                  "valueWidth": 120
              },
              "dataProvider": [{
                  "date": "2012-01-01",
                  "members": "{{$asistentes}}",
                  "townName": "New York",
                  "townName2": "New York",
                  //"townSize": 25,
                  "latitude": 40.71,
                  "duration": 408
              }, {
                  "date": "2012-01-02",
                  "members": 371,
                  "townName": "Washington",
                  //"townSize": 14,
                  "latitude": 38.89,
                  "duration": 482
              }, {
                  "date": "2012-01-03",
                  "members": 433,
                  "townName": "Wilmington",
                  "townSize": 6,
                  "latitude": 34.22,
                  "duration": 562
              }, {
                  "date": "2012-01-04",
                  "members": 345,
                  "townName": "Jacksonville",
                  "townSize": 7,
                  "latitude": 30.35,
                  "duration": 379
              }, {
                  "date": "2012-01-05",
                  "members": 480,
                  "townName": "Miami",
                  "townName2": "Miami",
                  "townSize": 10,
                  "latitude": 25.83,
                  "duration": 501
              }, {
                  "date": "2012-01-06",
                  "members": 386,
                  "townName": "Tallahassee",
                  "townSize": 7,
                  "latitude": 30.46,
                  "duration": 443
              }, {
                  "date": "2012-01-07",
                  "members": 348,
                  "townName": "New Orleans",
                  "townSize": 10,
                  "latitude": 29.94,
                  "duration": 405
              }, {
                  "date": "2012-01-08",
                  "members": 238,
                  "townName": "Houston",
                  "townName2": "Houston",
                  "townSize": 16,
                  "latitude": 29.76,
                  "duration": 309
              }, {
                  "date": "2012-01-09",
                  "members": 218,
                  "townName": "Dalas",
                  "townSize": 17,
                  "latitude": 32.8,
                  "duration": 287
              }, {
                  "date": "2012-01-10",
                  "distance": 349,
                  "townName": "Oklahoma City",
                  "townSize": 11,
                  "latitude": 35.49,
                  "duration": 485
              }, {
                  "date": "2012-01-11",
                  "distance": 603,
                  "townName": "Kansas City",
                  "townSize": 10,
                  "latitude": 39.1,
                  "duration": 890
              }, {
                  "date": "2012-01-12",
                  "distance": 534,
                  "townName": "Denver",
                  "townName2": "Denver",
                  "townSize": 18,
                  "latitude": 39.74,
                  "duration": 810
              }, {
                  "date": "2012-01-13",
                  "townName": "Salt Lake City",
                  "townSize": 12,
                  "distance": 425,
                  "duration": 670,
                  "latitude": 40.75,
                  "dashLength": 8,
                  "alpha": 0.4
              }, {
                  "date": "2012-01-14",
                  "latitude": 36.1,
                  "duration": 470,
                  "townName": "Las Vegas",
                  "townName2": "Las Vegas"
              }, {
                  "date": "2012-01-15"
              }, {
                  "date": "2012-01-16"
              }, {
                  "date": "2012-01-17"
              }, {
                  "date": "2012-01-18"
              }, {
                  "date": "2012-01-19"
              }],
              "valueAxes": [{
                  "id": "distanceAxis",
                  "axisAlpha": 0,
                  "gridAlpha": 0,
                  "position": "left",
                  "title": "distance"
              }, {
                  "id": "latitudeAxis",
                  "axisAlpha": 0,
                  "gridAlpha": 0,
                  "labelsEnabled": false,
                  "position": "right"
              }, {
                  "id": "durationAxis",
                  "duration": "mm",
                  "durationUnits": {
                      "hh": "h ",
                      "mm": "min"
                  },
                  "axisAlpha": 0,
                  "gridAlpha": 0,
                  "inside": true,
                  "position": "right",
                  "title": "duration"
              }],
              "graphs": [{
                  "alphaField": "alpha",
                  "balloonText": "[[value]] miles",
                  "dashLengthField": "dashLength",
                  "fillAlphas": 0.7,
                  "legendPeriodValueText": "total: [[value.sum]] mi",
                  "legendValueText": "[[value]] mi",
                  "title": "distance",
                  "type": "column",
                  "valueField": "distance",
                  "valueAxis": "distanceAxis"
              }, {
                  "balloonText": "latitude:[[value]]",
                  "bullet": "round",
                  "bulletBorderAlpha": 1,
                  "useLineColorForBulletBorder": true,
                  "bulletColor": "#FFFFFF",
                  "bulletSizeField": "townSize",
                  "dashLengthField": "dashLength",
                  "descriptionField": "townName",
                  "labelPosition": "right",
                  "labelText": "[[townName2]]",
                  "legendValueText": "[[value]]/[[description]]",
                  "title": "latitude/city",
                  "fillAlphas": 0,
                  "valueField": "latitude",
                  "valueAxis": "latitudeAxis"
              }, {
                  "bullet": "square",
                  "bulletBorderAlpha": 1,
                  "bulletBorderThickness": 1,
                  "dashLengthField": "dashLength",
                  "legendValueText": "[[value]]",
                  "title": "duration",
                  "fillAlphas": 0,
                  "valueField": "duration",
                  "valueAxis": "durationAxis"
              }],
              "chartCursor": {
                  "categoryBalloonDateFormat": "DD",
                  "cursorAlpha": 0.1,
                  "cursorColor":"#000000",
                   "fullWidth":true,
                  "valueBalloonsEnabled": false,
                  "zoomable": false
              },
              "dataDateFormat": "YYYY-MM-DD",
              "categoryField": "date",
              "categoryAxis": {
                  "dateFormats": [{
                      "period": "DD",
                      "format": "DD"
                  }, {
                      "period": "WW",
                      "format": "MMM DD"
                  }, {
                      "period": "MM",
                      "format": "MMM"
                  }, {
                      "period": "YYYY",
                      "format": "YYYY"
                  }],
                  "parseDates": true,
                  "autoGridCount": false,
                  "axisColor": "#555555",
                  "gridAlpha": 0.1,
                  "gridColor": "#FFFFFF",
                  "gridCount": 50
              },
              "export": {
                "enabled": true
               }
          });
          </script>        
          <!-- Chart code -->
        <script>
          var chart = AmCharts.makeChart("char2tdiv", {
                        "type": "pie",
                        "theme": "light",
                        "innerRadius": "40%",
                        "gradientRatio": [-0.4, -0.4, -0.4, -0.4, -0.4, -0.4, 0, 0.1, 0.2, 0.1, 0, -0.2, -0.5],
                        "dataProvider": [{
                            "country": "Lithuania",
                            "litres": 501.9
                        }, {
                            "country": "Czech Republic",
                            "litres": 301.9
                        }, {
                            "country": "Ireland",
                            "litres": 201.1
                        }, {
                            "country": "Germany",
                            "litres": 165.8
                        }, {
                            "country": "Australia",
                            "litres": 139.9
                        }, {
                            "country": "Austria",
                            "litres": 128.3
                        }],
                        "balloonText": "[[value]]",
                        "valueField": "litres",
                        "titleField": "country",
                        "balloon": {
                            "drop": true,
                            "adjustBorderColor": false,
                            "color": "#FFFFFF",
                            "fontSize": 16
                        },
                        "export": {
                            "enabled": true
                        }
          });
        </script>  

        <script>
            var chart = AmCharts.makeChart( "chart3div", {
              "type": "serial",
              "addClassNames": true,
              "theme": "light",
              "autoMargins": false,
              "marginLeft": 30,
              "marginRight": 8,
              "marginTop": 10,
              "marginBottom": 26,
              "balloon": {
                "adjustBorderColor": false,
                "horizontalPadding": 10,
                "verticalPadding": 8,
                "color": "#ffffff"
              },

              "dataProvider": [ {
                "year": 2009,
                "income": 23.5,
                "expenses": 21.1
              }, {
                "year": 2010,
                "income": 26.2,
                "expenses": 30.5
              }, {
                "year": 2011,
                "income": 30.1,
                "expenses": 34.9
              }, {
                "year": 2012,
                "income": 29.5,
                "expenses": 31.1
              }, {
                "year": 2013,
                "income": 30.6,
                "expenses": 28.2,
                "dashLengthLine": 5
              }, {
                "year": 2014,
                "income": 34.1,
                "expenses": 32.9,
                "dashLengthColumn": 5,
                "alpha": 0.2,
                "additional": "(projection)"
              } ],
              "valueAxes": [ {
                "axisAlpha": 0,
                "position": "left"
              } ],
              "startDuration": 1,
              "graphs": [ {
                "alphaField": "alpha",
                "balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
                "fillAlphas": 1,
                "title": "Income",
                "type": "column",
                "valueField": "income",
                "dashLengthField": "dashLengthColumn"
              }, {
                "id": "graph2",
                "balloonText": "<span style='font-size:12px;'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
                "bullet": "round",
                "lineThickness": 3,
                "bulletSize": 7,
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "useLineColorForBulletBorder": true,
                "bulletBorderThickness": 3,
                "fillAlphas": 0,
                "lineAlpha": 1,
                "title": "Expenses",
                "valueField": "expenses",
                "dashLengthField": "dashLengthLine"
              } ],
              "categoryField": "year",
              "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "tickLength": 0
              },
              "export": {
                "enabled": true
              }
            } );
        </script>     
    </footer>
</html>
