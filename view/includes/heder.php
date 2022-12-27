<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
<!--
.don{
	
    
    color: #fff;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
	text-align: center;
	}
		.my{
	border: none;
    background-color: #000787;
    color: #fff;
    padding: 5px 10px;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    border-radius: 35px;

			
		}
		.my:hover{
			 background-color:#008F7B;
	border-radius:40px;	
		}
				.y{
    color: #fff;
    padding: 5px 5px;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    border-radius: 45%;			
		}
		.y:hover{
    background-color: #110082;
    border-radius: 50px;
		}
		
		b.fon{
			text-align: center;
			font-family:"MRT_Zohal","Urdu Typesetting";
		}
.mybtn{
 border:none;
 background-color:#000384;
 color:#fff;
 padding:7px 30px;
 text-decoration:none;
 display: inline-block;
 cursor: pointer;

    border-bottom-right-radius:40%;
	    border-bottom-left-radius:40%;
    text-align:center;
}

.mybtn:hover{
    background-color: #02C0C9;
    border-bottom-right-radius:55%;
    border-bottom-left-radius:55%;
	text-align:center;
}

-->
</style>
</head>
<body bgcolor="#fffded">

<link rel="stylesheet" href="../css/sidbar.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="z-index : 1;display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
    <a href="#" class="w3-bar-item w3-button" onclick="serch()">
	 <form method="POST" action="action-search.php">
	<input  type="text" name="search"  id="search" placeholder="  search..." style=" border-radius: 7px;display:inline-block;"/>
	<input type="submit" class="my" name="submit" align="center" value="search">
    </form>
	</a>	
  <a href="darbarehma.php" class="w3-bar-item w3-button">درباره ما</a>
  <a onclick="show()" class="w3-bar-item w3-button">تعداد بازدید</a>
  <a href="contact.php" class="w3-bar-item w3-button">ارتباط باما</a>
                    <?php
	                   if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin")                      
                         {
                    ?>
                     <a href="addtoAdmin.php" class="w3-bar-item w3-button">افزودن مدیر</a>
                    <?php
                         } 
                    ?>
</div>

<div id="main">
<div class="w3-teal">

<button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>

 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
 &nbsp;&nbsp; &nbsp;&nbsp;
<?php
					   
                        if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true)) 
                         {
                    ?>
					 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
<?php
						 }
?>
 <?php
					   
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="public")                      
                         {
                    ?>
					 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
<?php
						 }
?>
					
 <b>

                <a href="index.php" class="mybtn">صفحه اصلی</a>
                <a href="register.php"  class="mybtn" >عضويت در سايت</a>
                    <?php
					   
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true) 
                         {
                    ?>
                <a href="logout.php"  class="mybtn" >خروج از سایت <?php echo(" ({$_SESSION["realname"]}) ") ?></a>
                    <?php
                         } 
                        else
                         { 
                    ?>
                <a href="login.php"  class="mybtn" >ورود به سايت</a>
                    <?php
                         }   
                    ?>
                    <?php
	                   if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin")                      
                         {
                    ?>
                <a href="admin_products.php"  class="mybtn" >مدیریت محصولات</a>                   
                    <a href="admin_manage_order.php"  class="mybtn" >مدیریت سفارشات</a>
                    <?php
                         } 
                    ?>

          
</b>
<?php
include("slider.php");
?>
<div id='layout' style='height:8px;background-color:#323333;text-align:center'></div>
</div>
</div>


<?php
 if(isset($_SESSION['counter']))
 {
	 $_SESSION['counter']+=1; 
} 
else{ $_SESSION['counter']=1;
}
 $msg="you have visited this page" .$_SESSION['counter'];
 $msg.="in this session"; 
 
 ?>

<script>
function show(){
	var vis="<?php echo"$msg"?>";
	alert(vis);
}
</script>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

<br>
</body>
</html>



