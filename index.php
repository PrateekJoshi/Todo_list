<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="" />
    <meta name="author" content="" />
    <title>To do list</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
</head>
<body>
<div class="container">
<div class="page-header">
  <h1>ToDo Application</h1>
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
    <script src="assets/plugins/jquery-2.1.4.min.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/plugins/bootstrap.js"></script>
    <script src="myscript.js"></script>
</body>
</html>
