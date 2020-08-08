<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0); 
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/style4.css')}}">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="{{ asset('admin/css/fontawesome-all.css')}}" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!--//web-fonts-->
    <style >
        body{
            background-color: black;
            background-image: url("frontside/images/homepage.jpeg");
            background-position: center;
        }
    </style>
</head>
 <body >


    
    <div class="wrapper">
        <!-- Sidebar Holder -->
    
        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
                 
                <div class="container-fluid">

                    <div class="navbar-header">
                       
                    </div>
                    <!-- Search-from -->
                   
                    <!--// Search-from -->
                    
                           
            </nav>
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center "><font color="white"><u>Movies Review</u></font></h2>
            <!--// main-heading -->

            <!-- Cards content -->
                        <!-- top-bar -->

            </nav>

            <div class="container-fluid">
                <div class="row">
                   
                    @foreach($res as $value)
                    <div class="col-md-3" style="margin-bottom: 2%;">
                        <div class="card ">
                           
                            <div class="card-body text-center">
                                                    <img src="{{ asset('admin/mphotos/'.$value->mimage) }}" width="230" height="300">

                                                  
                                <h3>{{ $value->mname }}</h3>

                                <a href="/info/{{ $value->mid }}">View More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
</body>

</html>