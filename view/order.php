<style>
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
		
.image {
	border-left-style: solid;
	border-right-style: solid;
	border-top-style: solid;
	border-color:#fff;
	border-top-left-radius:19%;
	border-top-right-radius:19%;
	display: block;
  	width:700px; 
	height:425px;
	background-color: #2a2e62;	 
	box-shadow: 2px 2px 10px rgba(1,2,5,0.6);
    transition:.5s ease;
}
.image:hover{
	border-radius:13%;
	border-style:solid;
	width:725px;
	height:450px;
	transition:.5s ease;
}

.di{
	border-left-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	background-image:linear-gradient(to left,#1f2445,#034560,#3d4054);
	color:#fff;
}

</style>
<?php
include ("includes/header.php");

$link = mysqli_connect("localhost", "root", "", "tavon");
if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$pro_code = 0;
if (isset($_GET['id']))
    $pro_code = $_GET['id'];

if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
?>

<br />
<span style='color:red;'><b>برای خرید پستی محصول انتخاب شده باید وارد سایت شوید</b></span>
<br/><br/>

درصورتی که عضو فروشگاه هستید برای ورود 
<a href='login.php' style='text-decoration: none;' ><span style='color:blue;'><b>اینجا</b></span></a>
کلیک کنید
<br/>

 و در صورتی که عضو نیستید برای ثبت نام در سایت
<a href='register.php' style='text-decoration: none;' ><span style='color:green;'><b>اینجا</b></span></a>
کلیک کنید
<br /><br />
<?php
	exit();
}

$query = "SELECT * FROM products WHERE pro_code='$pro_code'";

$result = mysqli_query($link, $query);    

?>

 <form name="order" action="action_order.php"  method="POST" >
 
<?php

if ($row = mysqli_fetch_array($result)) {    

?> 
<br><br>
  <br />
<div align="center">

<img class="image" src="../images/products/<?php echo ($row['pro_image']) ?>"  />
<div class="di"style="width:700px; box-shadow: 2px 2px 10px rgba(1,2,5,0.5); border-bottom-left-radius:13%;border-bottom-right-radius:13%;
 color: #ffffff;text-align: center;">
<br><b>
<h3 style="color: #ffffff;"><?php echo ($row['pro_name']) ?></h3>
	<br>
<br><br>
   قيمت  : <?php echo ($row['pro_price']) ?> &nbsp; ريال
    <br/>
<br/>
    تعداد موجودي  : <span style="color:#e0ffeb;"><?php echo ($row['pro_qty']) ?></span>
    <br/>
<br/>    
	توضيحات  :  
	 <?php 
    $count = strlen($row['pro_detail']);
    echo (substr($row['pro_detail'], 0, (int)($count/2))); 
    ?>
    </span>
	
     <br/><br/>
    <b></b>
   
<hr><hr>
<br/><br/>
	<table width="600" border="0" dir="rtl" style="color:#fff;">
  <tbody>
    <tr>
      <td><b>کد کالا </b><span style="color:#00BEF3">*</span></td>
      <td><input type="text" id="pro_code" name="pro_code" value="<?php echo ($pro_code); ?>" style="background-color: lightgray;border-radius:8px;border-color:#fff;" readonly  /></td>
    </tr>
	<tr><tr>
    <tr>
      <td><b>نام کالا<span style="color: #00BEF3;">*</span></td>
      <td>
	  <input type="text" style="text-align: right;background-color: lightgray;border-radius:8px;border-color:#fff;"
	   id="pro_name" name="pro_name" value="<?php echo ($row['pro_name']); ?>"  readonly  /></td>
    </tr>
	<tr><tr>
    <tr>
      <td><b>تعداد یا مقدار درخواستی <span style="color: #00BEF3;">*</span></td>
      <td><input type="text" style="text-align: left;border-radius:8px;border-color:#fff;" id="pro_qty" name="pro_qty" onchange="calc_price();"  /></td>
    </tr>
	<tr><tr>
    <tr>
      <td><b>قیمت واحد کالا<span style="color: #00BEF3;">*</span></td>
      <td><input type="text" style="text-align: left;background-color: lightgray;border-radius:8px;border-color:#fff;" id="pro_price" name="pro_price" value="<?php echo ($row['pro_price']); ?>"  readonly  /> &nbsp; ریال</td>
    </tr>
	<tr><tr>
    <tr>
      <td><b>مبلغ قابل پرداخت<span style="color: #00BEF3;">*</span></td>
      <td><input type="text" style="text-align: left;background-color: lightgray;border-radius:8px;border-color:#fff;" id="total_price" name="total_price" value="0"  readonly  /> &nbsp; ریال</td>
    </tr>
	<tr><tr>
		<tr><tr>
		<tr><tr>
		<tr><tr>
		<tr><tr>
		<tr><tr>
		<tr><tr>
		<tr><tr>
	
<script type="text/javascript">
<!--
   function calc_price()
    {
      var pro_qty=<?php echo ($row['pro_qty']); ?>;  
      var price= document.getElementById('pro_price').value;
      var count= document.getElementById('pro_qty').value;
      var total_price;

      if (count>pro_qty){
        alert('تعداد موجودی انبار کمتر از درخواست شما است!!');
        document.getElementById('pro_qty').value=0;
        count=0;
      }

       if (count==0 || count=='')
        total_price=0;
       else 
        total_price=count*price;
      
       document.getElementById('total_price').value= total_price;
	
    }	
	
-->
</script> 
	

<?php
  
    $query = "SELECT * FROM users WHERE username='{$_SESSION['username']}'";
    $result = mysqli_query($link, $query);
    $user_row = mysqli_fetch_array($result);
?>    

    <tr>
      <td> <b>نام خریدار <span style="color: #00BEF3;">*</span></td>
      <td><input type="text" id="realname" name="realname" value="<?php echo ($user_row['realname']); ?>" style="border-radius:8px;border-color:#fff;background-color: lightgray;" readonly /></td>
    </tr>
	<tr><tr>
    <tr>
      <td><b>پست الكترونيكي <span style="color: #00BEF3;">*</span></td>
      <td><input type="text" style="text-align: left;background-color: lightgray;border-radius:8px;border-color:#fff;" id="email" name="email" value="<?php echo ($user_row['email']); ?>"  readonly  /></td>
    </tr>
	<tr><tr>
    <tr>
      <td><b>شماره تلفن همراه <span style="color: #00BEF3;">*</span></td>
      <td><input type="text" style="text-align: left;border-radius:8px;border-color:#fff;" id="mobile" name="mobile" value="09"  /></td>
    </tr>
	  <tr><tr>
    <tr>
      <td><b> آدرس دقیق پستی جهت دریافت محصول <span style="color: #00BEF3;">*</span></td>
      <td><textarea style="text-align: right;font-family:tahoma;border-radius:8px;border-color:#fff;" id="address" name="address"  cols="25" rows="3" wrap="virtual"></textarea></td>
    </tr>
    </tr>
  </tbody>                
    

<script type="text/javascript">
<!--
	function check_input()
     {
       var r = confirm("از صحت اطلاعات وارد شده اطمینان دارید؟");
       if (r == true) {
                   var validation=true;
                   var count= document.getElementById('pro_qty').value;
                   var mobile= document.getElementById('mobile').value;
                   var address= document.getElementById('address').value;
                   
                   if (count==0 || count=='')
                    validation=false;
                    
                   if (mobile.length<11)
                    validation=false;
                   
                   if (address.length<15)
                    validation=false;
                   
                   if (validation)
                    document.order.submit(); 
                   else
                    alert('برخی از ورودی های فرم سفارش محصول به درستی پر نشده‌اند'); 
        }
     }
-->
</script>


   
</table>
<br><br>
<input class="man" type="button" value="خرید محصول" onclick="check_input();" />
<br><br><br>
</div></div>
  </form>    
    <br>
     <br>     <br>
     <br> 
<?php
} 

										 
include ("includes/footer.php");
?>