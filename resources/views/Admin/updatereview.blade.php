<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Movie review form</title>
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
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="{{ asset('admin/css/fontawesome-all.css') }}" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
    <h1 class='text-center main-heading '>Update Movie Review Form</h1>
</head>

<body>
    <table class="table table-bordered">
    <tr>
        <th>movie Name</th>
        <th>movie category</th>
        <th>movie language</th>
         <th>movie description</th>
         <th>Image</th>
          <th>movie rate</th>
         <th>movie review</th>
        <th>Update</th>
        <th>Delete</th>
    
    @foreach($res as $items)
    <tr>
        <td>{{$items->mname}}</td>
        <td>{{$items->mcategory}}</td>
        <td>{{$items->mlanguage}}</td>
        <td>{{$items->mdescription}}</td>
        <td><img src="{{ asset('admin/mphotos/'.$items->mimage) }}" width="100" height="100"></td>
        <td>{{$items->mrate}}</td>
        <td>{{$items->mreview}}</td>
        <td><a href="/updateqry/{{$items->mid}}">Update</a>
        <td><a href="/delete/{{$items->mid}}">delete</a>
    </tr>
    @endforeach
    


</table>


    <!-- Required common Js -->
    <script src="{{ asset('admin/js/jquery-2.2.3.min.js')}}"></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="{{ asset('admin/js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>