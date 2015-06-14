<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>To do list</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">
<div class="page-header">
  <h1>To do Application</h1>
</div>	

   <div class="row container">
	<input type="text" class="form-control col-md-11" placeholder="Add your items here..." name="item" id="input_item">
	<button type="submit" class="btn btn-default col-md-1" id="btn_todo" onclick="process()">Add</button>
   </div>

<div id="final_list">

</div>
</div>

 <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/plugins/bootstrap.js"></script>
    <script src="myscript.js"></script>
</body>
</html>
