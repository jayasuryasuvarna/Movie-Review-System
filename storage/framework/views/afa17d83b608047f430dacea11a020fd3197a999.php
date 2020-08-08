<!DOCTYPE html>
<html>
<head>
	<title>Review</title>
 <link href="<?php echo e(asset('admin/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="<?php echo e(asset('admin/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="<?php echo e(asset('admin/css/fontawesome-all.css')); ?>" rel="stylesheet">
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

	<?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<img src="<?php echo e(asset('admin/mphotos/'.$value->mimage)); ?>" width="300" height="300">
	<h1><?php echo e($value->mname); ?></h1>
	<h4>Category : <?php echo e($value->mcategory); ?></h4>
	<h4>Language: <?php echo e($value->mlanguage); ?></h4>
	<h4>Description: <?php echo e($value->mdescription); ?></h4>
	<h4>Rating: <?php echo e($value->mrate); ?></h4>
	<h4>Review: <?php echo e($value->mreview); ?></h4>
		<a href="<?php echo e(url('/home')); ?>" class='btn btn-info'>Home</a>
	
</div>
</div>
</div>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</center>
</body>
</html><?php /**PATH C:\wamp64\www\movie\resources\views/movieinfo.blade.php ENDPATH**/ ?>