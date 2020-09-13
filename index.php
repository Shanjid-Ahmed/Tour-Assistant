<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My-tour bootstrap Design website | Home :: w3layouts</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-family:Lucida Calligraphy; font-size:20px; color:#09F"><b>Category</b></td></tr>
<?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Welcome to My Tour</td></tr>
<tr><td class="paraText" width="900px">Plan and Book Your Perfect Trip.Create your dream holiday.
what you like. Do what you love.
What's New Explore new experiences, attractions, food and wine trends.
What will you find during your visit to My Tour? Awe-inspiring natural beauty and the dramatic
red rock landscape of the Colorado National Monument. Exhilarating outdoor adventures including
hiking, camping or skiing on the Grand Mesa. Hundreds of miles of world-class mountain biking trails
such as the Kokopelli Trail. Incredible whitewater rafting on the Colorado River. Stunning golf courses
whose green fairways are juxtaposed against the craggy Redland desert. Peaceful places to reflect and
unwind amidst the natural splendor of Colorado's Western Slope. A charming downtown full of great
shops, restaurants, art galleries and so much more. This is My Tour, where you can experience
beautiful tourist places.</td>
</tr></table>

</div>

</div>

<div style="clear:both"></div>

<div id="section-5" class="contact section">
  <div class="contact-head text-center">
	  <h3>Contact Us</h3>
	  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
	  <h4 style="color:#000">Plan Your Trip
Our travel experts can help you book now!</h4>

	  <div class="contact-grids">
		  <div class="container">
		  <h4 style="color:#09F">Shanjid Travels</h4>
		  <br/>
			  <div class="col-md-6" style"">
					
					<p style="color:#000;text-align:right">NEED HELP BOOKING PACKAGE<br/>
					For fantastic suggestions you may also call our travel expert</p>

			  </div>
			  <div class="col-md-6">
			  
					<h5 style="color:#000;text-align:left">+8801676845705</h5>
					<h5 style="color:#000;text-align:left"><a href="#">info@shanjid.com</a></h5>
					<h5 style="color:#000;text-align:left">Pabna Sadar</h5>
			   </div>
			  <div class="clearfix"></div>
		  </div>
	  </div>
	</div>
</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>