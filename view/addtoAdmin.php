<style>
.di{
	background-image:linear-gradient(to left,#1f2445,#034560,#3d4054);
	color:#fff;
	border-style:solid;
	box-shadow: 2px 2px 10px rgba(1,2,5,0.6);
	border-radius:30px;
	width:750px;
}
</style>
<?php
include ("includes/header.php"); 
?>
<br><br><br><br><br><br>
<?php 
$link = mysqli_connect("localhost", "root", "", "tavon");
$query= "SELECT * FROM `users` WHERE `type` = 1";
$result = mysqli_query($link, $query); 
?>
<?php
	while ($row = mysqli_fetch_array($result)) {
?>
 <div style="width:600px; border-top-left-radius: 7px; border-top-right-radius: 7px" class="di"	align="right">
<?php echo ($row['realname']); ?> | <?php echo ($row['username']); ?> | <?php echo ($row['email']); ?>
</div>
<?php
	}
?>
<br><br><br><br><br><br> 
<?php
include ("includes/footer.php");
?>


