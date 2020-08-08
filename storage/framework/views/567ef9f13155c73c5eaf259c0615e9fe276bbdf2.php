<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin login</title>
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
    <link href="<?php echo e(asset('admin/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="<?php echo e(asset('admin/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="<?php echo e(asset('admin/css/fontawesome-all.css')); ?>" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
    <h1 class='text-center main-heading '>Admin Login</h1>
</head>

<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Admin Login</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="/adminloginqry" method="post">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="uname" placeholder="Enter Username" required="" >
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="form-check col-md-6 text-sm-left text-center">
                           
                            
                        </div>
                        
                    </div>
                    <button type="submit" name="login" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4 " value="insert" >Login</button>
                </form>
               
                </h1>
            </div>

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by Cypher
                   
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>

    <!-- Required common Js -->
    <script src="<?php echo e(asset('admin/js/jquery-2.2.3.min.js')); ?>"></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="{{ asset('admin/js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html><?php /**PATH C:\wamp64\www\movie\resources\views/admin/login.blade.php ENDPATH**/ ?>