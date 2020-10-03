<?php
session_start();
error_reporting(0);
include('includes/config.php');


?>
<!DOCTYPE HTML>
<html>
<head>
<title>CMS | Complaint Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Complaint Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->

<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">CMS-Complaint Management System</h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- privacy ---->

<div class="privacy">
	<div class="container">
					<h2>About us</h2>
					<p>At The Sun Food, we deliver the intense satisfaction of top-notch fusion cuisines
					if you love a hearty meal and a good time with family and friends. 
					we give you the finest dishes prepared by the hands of our professional chefs 
					where you will have a fabulous dining experience in our modern and welcoming restaurant.</p>
	
	
	
	
					<table>
						<thead>
							<th>Business Hours</th>
							
						</thead>
						<tr>
						
		<tr><td><center>Mon:</center></td>	<td>10:30 AM – 12:00 PM</td></tr>
	<tr><td><center>Tue:</center></td><td>10:30 AM – 12:00 PM</td></tr>
	<tr><td><center>Wed:</center></td>	<td>10:30 AM – 12:00 PM</td></tr>
	<tr><td><center>Thu:</center></td>	<td>10:30 AM – 12:00 PM</td></tr>
	<tr><td><center>Fri:</center></td>	<td>10:30 AM – 12:00 PM</td></tr>
	<tr><td><center>Sat:</center></td>	<td>10:30 AM – 12:00 PM</td></tr>
	<tr><td><center>Sun:</center></td>	<td>10:30 AM – 12:00 PM</td></tr>
					
						</table>

		
	</div>
</div>


<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>