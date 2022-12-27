<?php
include ("includes/header.php");


$link = mysqli_connect("localhost", "root", "", "tavon");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$pro_code=0;
if (isset($_GET['id']))
	 $pro_code=$_GET['id'];
$query = "SELECT * FROM products WHERE pro_code='$pro_code'";     

$result = mysqli_query($link, $query);     

?>
<style>
.container {
  position: relative;
  width: 50%;
}

.image {
	display: block;
  	width:700px; 
	height:455px;
	background-color: #2a2e62;
	 
	box-shadow: 2px 2px 10px rgba(1,2,5,0.6);
  transition:.5s ease;
}
.image:hover{
	height:495px;
	transition:.5s ease;
}
.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #000000;
  overflow: hidden;
  width:700px;
  height:0;
  opacity:0.5;
  transition: .5s ease;
}

.container:hover .overlay {
  height: 30%;
  opacity:0.4;
  transition:.5s ease;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

.di{

	background-image:linear-gradient(to left,#1f2445,#034560,#3d4054);
}
.di:hover{
	background-image:linear-gradient(to right,#3d4054,#005754,#1f2445);
}


.sefaresh{
    color: #00b552;

			
		}
		.sefaresh:hover{
			color:#00a0b5;
		}
</style>
  <?php

    if ($row = mysqli_fetch_array($result)) {
  
   ?> 
		<br><br><br>

<div align="center">
<div class="di"style="width:700px; box-shadow: 2px 2px 10px rgba(1,2,5,0.5); border-radius:13%;color: #ffffff;text-align: center;">
<br><b>
<h3 style="color: #ffffff;"><?php echo ($row['pro_name']) ?></h3>
	<br>
<div class="container">
<img class="img image" src="../images/products/<?php echo ($row['pro_image']) ?>"  />
<div class="overlay">
    <div class="text"><b><a href="order.php?id=<?php echo ($row['pro_code']) ?>" class="sefaresh" style="text-decoration: none;">سفارش و خرید پستی</a></b></div>
  </div>
</div>
<br><br>
   قيمت  : <?php echo ($row['pro_price']) ?> &nbsp; ريال
    <br/>
<br/>
    تعداد موجودي  : <span style="color:#e0ffeb;"><?php echo ($row['pro_qty']) ?></span>
    <br/>
<br/>
     توضيحات  : <span style="color:#e0ffeb;"> <?php echo ($row['pro_detail']) ?> </span>

     <br/><br/>
    <b></b>
    <br/><br/>	
</div></div>
	<br></b>
<?php
   
	  
} 

?>  
</tr>


<?php
include ("includes/footer.php");
?>
   
