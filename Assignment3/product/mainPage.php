<?php 
	//Restructed by Shuzheng Wang and Chang Chen from Assignment 1&2
	require "./includes/mainpage.inc.php/searchCondition.inc.php";
	// include './classes/model.php';
	// $model= new Model();
	require "../login/includes/dbh.inc.php";
	require "./includes/mainpage.inc.php/query.inc.php";
	include_once "./header/mainPage_header.php";
?>
<!--choose to display gallery slides or gallery tiles-->
<?php
	if(isset($parameter_slide)){
		require "./includes/mainpage.inc.php/gallery_slide.inc.php";
	}else if(isset($parameter)){
		require "./includes/mainpage.inc.php/gallery_tile.inc.php";
	}
?>
<!-- reference Cphayim's jquery.hiSlide to make the slide framework| https://github.com/Cphayim/jquery.hiSlide/blob/master/index.html-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="script/jquery.hislide.js"></script>
<script>
	$('.slide').hiSlide();
</script>				
<?php
	include_once "./footer/mainPage_footer.php";
?>	