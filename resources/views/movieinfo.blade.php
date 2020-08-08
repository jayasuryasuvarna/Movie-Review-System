<!DOCTYPE html>
<html>
<head>
	<title>Review</title>
 <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="{{ asset('admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="{{ asset('admin/css/fontawesome-all.css') }}" rel="stylesheet">
<style >
        body{
            background-color: black;
            background-image: url("../frontside/images/homepage.jpeg");
            background-position: center;
        }
        </style>
</head>

<body style = "font-family:georgia,garamond">
	  
  
 		<center>
	<br>
	

	<div class="container-fluid ">
		<div class="col-md-6 ">
		<div class="card">

	@foreach($res as $value)
	<img src="{{ asset('admin/mphotos/'.$value->mimage) }}" width="300" height="300">
	<h1>{{ $value->mname}}</h1>
	<h4>Category : {{ $value->mcategory}}</h4>
	<h4>Language: {{ $value->mlanguage}}</h4>
	<h4>Description: {{ $value->mdescription}}</h4>
	<h4>Rating: {{ $value->mrate}}</h4>
	<h4>Review: {{ $value->mreview}}</h4>
		<a href="{{url('/home')}}" class='btn btn-info'>Home</a>
	
</div>
</div>
</div>

	@endforeach
</center>
</body>
</html>