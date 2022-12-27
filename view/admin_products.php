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
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] ==
    "admin")) {
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

$url = $pro_code = $pro_name = $pro_qty = $pro_price = $pro_image = $pro_detail = "";

$btn_caption="افزودن كالا";
if (isset($_GET['action']) && $_GET['action'] == 'EDIT') { 
    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE pro_code='$id'";
    $result = mysqli_query($link, $query);
    if ($row = mysqli_fetch_array($result)) {
        $pro_code = $row['pro_code'];
        $pro_name = $row['pro_name'];
        $pro_qty = $row['pro_qty'];
        $pro_price = $row['pro_price'];
        $pro_image = $row['pro_image'];
        $pro_detail = $row['pro_detail'];
        $url = "?id=$pro_code&action=EDIT";
        $btn_caption="ويرايش كالا";

    }
		
}
?>

  <br /><br /><br />
  <div align="center">
  <div class="di" style="width:750px;">
  <br><br><br>
  <form name="add_product" action="action_admin_products.php<?php if (!empty($url)) echo($url); ?>"  method="POST" enctype="multipart/form-data" >
    <table border="0" dir="rtl"  style="margin-left: auto;margin-right: auto;color:#fff;"  >
                         
    <tr>
       <td style="width: 22%;"><b>کد کالا <span style="color:#00BEF3;">*</span></td>
       <td style="width: 78%;"><input type="text" id="pro_code" style="border-radius:8px;border-color:#fff;" name="pro_code" value="<?php echo ($pro_code) ?>"    /></td>
    </tr>
    <tr><tr>                   
    <tr>
       <td><b>نام کالا <span style="color:#00BEF3;">*</span></td>
       <td><input type="text" style="text-align: right;border-radius:8px;border-color:#fff;" id="pro_name" name="pro_name" value="<?php echo ($pro_name) ?>"   /></td>
    </tr>
    <tr><tr>                  
    <tr>
       <td><b>موجودی کالا <span style="color: #00BEF3;">*</span></td>
       <td><input type="text" style="text-align: left;border-radius:8px;border-color:#fff;" id="pro_qty" name="pro_qty" value="<?php echo ($pro_qty) ?>"   /></td>
    </tr>
    <tr><tr>             
    <tr>
       <td><b>قیمت کالا <span style="color:#00BEF3;">*</span></td>
       <td><input type="text" style="text-align: left;border-radius:8px;border-color:#fff;" id="pro_price" name="pro_price" value="<?php echo ($pro_price) ?>"   />&nbsp;&nbsp;ریال</td>
    </tr>
    <tr>             
    <tr>
       <td><b>آپلود تصویر کالا <span style="color:#00BEF3;">*</span></td>
       <td><input class="man" type="file" style="text-align: left;border-radius:8px;border-color:#fff;" id="pro_image" name="pro_image"  size="30" />
       <?php if (!empty($pro_image))
    echo ("<img class='ah' src='../images/products/$pro_image' width='100' height='60' />"); ?>
       </td>
    </tr>
    <tr><tr>                 
    <tr>
       <td><b>توضیحات تکمیلی کالا <span style="color:#00BEF3;">*</span></td>
       <td><textarea id="pro_detail" style="border-radius:8px;border-color:#fff;" name="pro_detail" cols="45" rows="10" wrap="virtual"  >
       	<?php echo ($pro_detail) ?>
       </textarea></td>
    </tr>
    <tr><tr><tr><tr>             
    <tr>
       <td><br /><br /></td>
       <td><input type="submit" class="man" value="<?php echo ($btn_caption) ?>" />&nbsp;&nbsp;&nbsp;<input class="man" type="reset" value="جديد" /></td>
    </tr>
                         
   </table>
  </form>
   </div></div>
   <br><br><br>
<?php

$query = "SELECT * FROM products";     
$result = mysqli_query($link, $query);
                                        
?>                                       
  <div align="center">
  <div class="di" style="width:1300px;">
  <br />  
<table border="0" style="width: 100%;" >    
<tr>
	<td>&nbsp;&nbsp;&nbsp;<span style="color:#00BEF3"><b>كد كالا</span></td>
	<td><span style="color:#00BEF3"><b>نام كالا</span></td>
	<td><span style="color:#00BEF3"><b>موجودي كالا</td>
	<td><span style="color:#00BEF3"><b>قيمت كالا</td>
	<td><span style="color:#00BEF3"><b>تصوير كالا</td>
	<td><span style="color:#00BEF3"><b>ابزار مديريتي</td>
</tr>

<?php                                             // نمایش فهرست کالاها
while ($row = mysqli_fetch_array($result)) {
?>
<tr><tr><tr><tr><tr><tr><tr><tr><tr><tr><tr>
	<td>&nbsp;&nbsp;&nbsp;<span style="color:#e8fbfc"><b><?php echo ($row['pro_code']) ?></td>
	<td><span style="color:#e8fbfc"><b><?php echo ($row['pro_name']) ?></td>
	<td><span style="color:#e8fbfc"><b><?php echo ($row['pro_qty']) ?></td>
	<td><span style="color:#e8fbfc"><b><?php echo ($row['pro_price']) ?>&nbsp; ريال</td>
	<td><img class="ah" src="../images/products/<?php echo ($row['pro_image']) ?>" style="border-radius:13px;"  width="210px" height="150px" /></td>
	<td>
     <b><span style="color:#ff729f"><b><a href="action_admin_products.php?id=<?php echo ($row['pro_code']) ?>&action=DELETE" style="text-decoration: none;">حذف</a></span></b>    
     <span style="color:#fff386;">&nbsp;|&nbsp;</span>
     <b><span style="color:#7eff72"><b><a href="admin_products.php?id=<?php echo ($row['pro_code']) ?>&action=EDIT" style="text-decoration: none;">ويرايش</a></b>    
    </td>
</tr>
<?php
} //while
?>

</table>
  <br /> 
   </div></div>

<?php
include ("includes/footer.php");
?>
   
