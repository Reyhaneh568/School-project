<style>
.di{
	background-image:linear-gradient(to left,#1f2445,#034560,#3d4054);
	color:#fff;
	border-style:solid;
	box-shadow: 2px 2px 10px rgba(1,2,5,0.6);
	border-radius:30px;
	width:750px;
}
	.man{
	border: none;
    background-color: ##4FD3FF;
    color: #000000;
    padding: 5px 10px;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    border-radius: 35px;

			
		}
		.man:hover{
			
			 background-color:#4FD3FF;
	         border-radius:40px;	
		}
		
</style>
<?php
include ("includes/header.php");
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
?>
<script type="text/javascript">
<!--
location.replace("index.php");	 
-->
</script>
<?php
} 

$link = mysqli_connect("localhost", "root", "", "tavon");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM users WHERE username='{$_SESSION['username']}'";
$result = mysqli_query($link, $query);
if ($row = mysqli_fetch_array($result)) {

    $realname = $row['realname'];
    $email = $row['email'];
}


?>
  <br />  <br />  <br />
<div  align="center" >
<div class="di">
  <br />  <br />
  <form name="contact" action="action_contact.php"  method="POST" >
    <table border="0" style="margin-left: auto;margin-right: auto;color:#fff;" dir="rtl" >
                         
    <tr>
       <td style="width: 22%;"><b>نام کاربری  <span style="color:#00BEF3;">*</span>&nbsp;&nbsp;</td>
       <td style="width: 78%;"><input type="text" id="realname" name="realname" style="border-radius:8px;border-color:#fff;" value="<?php echo ($realname) ?>" readonly /></td>
    </tr>
	 <tr><tr>
    <tr>
       <td><b>آدرس پست الكترونيك <span style="color: #00BEF3;">*&nbsp;&nbsp;</span></td>
       <td><input type="text" style="text-align: right;border-radius:8px;border-color:#fff;" id="email" name="email" value="<?php echo ($email) ?>" readonly /></td>
    </tr>
	 <tr><tr>
    <tr>
       <td><b>متن پيام <span style="color: #00BEF3;">*</span></td>
       <td><textarea id="detail" name="detail"  style="border-radius:8px;border-color:#fff;" cols="45" rows="10" wrap="virtual"  ></textarea></td>
    </tr>
     <tr><tr>               
    <tr>
       <td><br /><br /></td>
       <td><input type="submit" class="man" value="ارسال" />&nbsp;&nbsp;&nbsp;<input type="reset" class="man" value="جديد" /></td>
    </tr>
                         
   </table>
  </form>
        <br />  <br />              


                    <?php

$query = "SELECT * FROM `contact`";   
$result = mysqli_query($link, $query);   
				
					
	                   if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin")                      
                         {
                    ?>
					<hr><hr>
					<?php
					while ($row = mysqli_fetch_array($result)) {
					?>
					
			    <div style="width:600px;background-color:#2DCAFF; border-top-left-radius: 7px; box-shadow: 1px 1px 5px rgba(0,4,5,0.5);
				border-top-right-radius: 7px"	align="right" name="text31"><?php echo ($row['username']); ?> : username  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div>
                <div name="text32" style="height:50px;width:600px;box-shadow: 1px 1px 5px rgba(0,4,5,0.5);
				border-bottom-left-radius:7px;border-bottom-right-radius:7px"align="right">
				<b>
				<?php echo ($row['detail']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</b>
				</div>				
					<br>
						 <?php
						 }
						 } ?>
</div>
</div>
<?php
include ("includes/footer.php");
?>
   
