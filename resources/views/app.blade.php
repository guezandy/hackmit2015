<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Watch N Learn</title>

        <!-- Vendor CSS -->
        <link href="{{ asset('/css/ripples.min.css')}}" rel="stylesheet">

        <link href="{{ asset('material_vendors/fullcalendar/fullcalendar.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/animate-css/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/material-icons/material-design-iconic-font.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/socicon/socicon.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="{{ asset('material_vendors/animate-css/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/noUiSlider/jquery.nouislider.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/farbtastic/farbtastic.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/summernote/summernote.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">

	    <!-- Owl Carousel Assets -->
	    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
	    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
        <!-- CSS -->
        <link href="{{ asset('css/material/app.min.1.css')}}" rel="stylesheet">
        <link href="{{ asset('css/material/app.min.2.css')}}" rel="stylesheet">
        <script type="text/javascript"
                   src="https://maps.google.com/maps/api/js?sensor=false"></script>

       <style type="text/css">

           .top-menu > li > a.tm-search {
             background-image: url("../img/icons/search.png");
           }

           .top-menu > li > a.tm-notification {
             background-image: url("../img/icons/notification.png");
           }

           .top-menu > li > a.tm-settings {
             background-image: url("../img/icons/ellipsis.png");
           }


			#owl-demo .item{
			  background: #a1def8;
			  padding: 30px 0px;
			  display: block;
			  margin: 5px;
			  color: #FFF;
			  -webkit-border-radius: 3px;
			  -moz-border-radius: 3px;
			  border-radius: 3px;
			  text-align: center;
			}
			.customNavigation{
			  text-align: center;
			}
			//use styles below to disable ugly selection
			.customNavigation a{
			  -webkit-user-select: none;
			  -khtml-user-select: none;
			  -moz-user-select: none;
			  -ms-user-select: none;
			  user-select: none;
			  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
			}


       </style>
    </head>
    <body>
        <header id="header">
            <ul class="header-inner">


                <li class="logo hidden-xs">
                    <a href="index.html">Watch N Learn</a>
                </li>

                <li class="pull-right">
                <ul class="top-menu">
                    <li id="toggle-width">
                        <div class="toggle-switch">
                            <input id="tw-switch" type="checkbox" hidden="hidden">
                            <label for="tw-switch" class="ts-helper"></label>
                        </div>
                    </li>
                    <li id="top-search">
                        <a class="tm-search" href=""></a>
                    </li>



                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-settings" href=""></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li>
                                <!--TODO: Add logout route-->
                                <a href=""><i class="fa fa-power-off"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                </li>
            </ul>

            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
        </header>

        <section id="main">
            <section id="content">
                <div class="container">
                  @yield('content')
                </div>
            </section>
        </section>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">IE SUCKS!</h1>
                <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser <br/>in order to access the maximum functionality of this website. </p>
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
                <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
            </div>
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src="{{ asset('js/material/jquery-2.1.1.min.js')}}"></script>
        <script src="{{ asset('js/material/bootstrap.min.js')}}"></script>

        <script src="{{ asset('material_vendors/flot/jquery.flot.min.js')}}"></script>
        <script src="{{ asset('material_vendors/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{ asset('material_vendors/flot/plugins/curvedLines.js')}}"></script>
        <script src="{{ asset('material_vendors/sparklines/jquery.sparkline.min.js')}}"></script>
        <script src="{{ asset('material_vendors/easypiechart/jquery.easypiechart.min.js')}}"></script>

        <script src="{{ asset('material_vendors/fullcalendar/lib/moment.min.js')}}"></script>
        <script src="{{ asset('material_vendors/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{ asset('material_vendors/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
        <script src="{{ asset('material_vendors/auto-size/jquery.autosize.min.js')}}"></script>
        <script src="{{ asset('material_vendors/nicescroll/jquery.nicescroll.min.js')}}"></script>
        <script src="{{ asset('material_vendors/waves/waves.min.js')}}"></script>
        <script src="{{ asset('material_vendors/bootstrap-growl/bootstrap-growl.min.js')}}"></script>
        <script src="{{ asset('material_vendors/sweet-alert/sweet-alert.min.js')}}"></script>

        <!--FORM -->
        <script src="{{ asset('material_vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{ asset('material_vendors/fileinput/fileinput.min.js')}}"></script>
        <script src="{{ asset('material_vendors/chosen/chosen.jquery.min.js')}}"></script>
        <script src="{{ asset('material_vendors/moment/moment.min.js')}}"></script>
        <script src="{{ asset('material_vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <script src="{{ asset('material_vendors/noUiSlider/jquery.nouislider.all.min.js')}}"></script>
        <script src="{{ asset('material_vendors/input-mask/input-mask.min.js')}}"></script>
        <script src="{{ asset('material_vendors/farbtastic/farbtastic.min.js')}}"></script>
        <script src="{{ asset('material_vendors/summernote/summernote.min.js')}}"></script>

        <script src="{{ asset('js/material/flot-charts/curved-line-chart.js')}}"></script>
        <script src="{{ asset('js/material/flot-charts/line-chart.js')}}"></script>
        <script src="{{ asset('js/material/charts.js')}}"></script>



        <script src="{{ asset('js/material/charts.js')}}"></script>
        <script src="{{ asset('js/material/functions.js')}}"></script>
        <script src="{{ asset('js/material/demo.js')}}"></script>

   		<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
        <script>
			$(document).ready(function() {
			 
			  $("#owl-demo").owlCarousel({
			    jsonPath : 'json/customData.json',
			    jsonSuccess : customDataSuccess,
			    singleItem:true
			  });
 
			  function customDataSuccess(data){
			    var content = "";
			    for(var i in data["items"]){
			       
			       var start = data["items"][i].start;
			       var end = data["items"][i].end;
			       var text = data["items"][i].text;
			 
       			   content += "<a href=\"" +start+ "\" alt=\"" +end+ "\">\""+text+"\""
			    }
			    $("#owl-demo").html(content);
			  }
			 
			});
        </script>


    </body>
  </html>
