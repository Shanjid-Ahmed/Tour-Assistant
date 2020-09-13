<?php include('function.php'); ?>
<?php
	
	extract($_GET);
	extract($_POST);
	$query = "INSERT INTO reviews (pid,rating,review) VALUE ('$pid','$rating', '$review') ";
	if($cn->query($query))
	{
?>
<script type="text/javascript">
	alert("Review has been added.");
	window.location.href="detail.php?pid=<?=$pid?>";
</script>
<?php
	}
	else
	{
?>
<script type="text/javascript">
	alert("Review add problem.");
	window.location.href="detail.php?pid=<?=$pid?>";
</script>
<?php 
	}
?>