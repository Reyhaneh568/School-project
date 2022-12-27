<?php 
include ("includes/heder.php");
?>
<style>
* { 
  margin : 0;
  padding: 0;
  box-sizing : border-box;
}

.container {
  position : relative;
  display : flex;
  align-items : center;
  justify-content : center;
  flex-warp : warp;
  padding : 30px;  
}

.container .card {
  position: relative;
  width : 270px;
  height : 210px;  
  background-color : #fff;
  margin : 30px 10px;
  padding : 20px 15px;
  
  display : flex;
  flex-direction : column;
  box-shadow : 0 5px 20px rgba(0,0,0,0.5);
  transition : 0.3s ease-in-out;
  border-radius : 15px;
}
.container .card:hover {
  height : 350px;    
}


.container .card .image {
  position : relative;
  width :310px;
  height : 230px;
  top : -40%;
  left: 9px;
  box-shadow : 0 5px 20px rgba(0,0,0,0.2);
  z-index:5;
}

.container .card .image img {
  max-width : 100%;
  border-radius : 15px;
}

.container .card .content {
  position : relative;
  top : -140px;
  padding : 10px 15px;
  color : #111;
  text-align : center;
  visibility : hidden;
  opacity : 0;
  transition : 0.3s ease-in-out;
    
}

.container .card:hover .content {
   margin-top : 20px;
   visibility : visible;
   opacity : 1;
   transition-delay: 0.2s;
  
}

</style>
<?php



$link = mysqli_connect("localhost", "root", "", "tavon");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM products";   

$result = mysqli_query($link, $query);   


?>
<p align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="darbarehma.php"><img src="../images/tavon.png" alt="" width="80" height="55px" align="center"/></a> &nbsp;&nbsp;&nbsp;
	 <b class="fon"
    style="font-size:23px"name="text6">&nbsp;&nbsp;لیست کالا ها</b></p>
<br><br><br><br>
 <table style="width: 100%;" border="0%"  >
  <tr>
  
  <?php

$counter = 0;
while ($row = mysqli_fetch_array($result)) { 
    $counter++;
?> 
	<td style="vertical-align:top;width: 33%;" >
	
   <div class = "container">
    <div class = "card">
      <div class ="image">
         <a href="product_detail.php?id=<?php echo ($row['pro_code']) ?>" style="text-decoration: none;">
         <img  src="../images/products/<?php echo ($row['pro_image']) ?>" height="230px" width="310px"/>
         </a>
      </div>
      <div class ="content">


        <p>
        <b><h3 style="color: #55006a;"><?php echo ($row['pro_name']) ?></h3>
		
    قيمت  :<span style="color:#010b99;"> <?php echo ($row['pro_price']) ?> &nbsp; ريال </span>
    <br/>

    تعداد موجودي  : <span style="color:#010b99;"><?php echo ($row['pro_qty']) ?></span>
    <br/>

     توضيحات  : <span style="color:#010b99;"><?php echo (substr($row['pro_detail'],0,60)) ?>...<a href="product_detail.php?id=<?php echo ($row['pro_code']) ?>" style="text-decoration: none;color:#004844;">بیشتر</a></span>
     <br/><br/>
    <b><a href="product_detail.php?id=<?php echo ($row['pro_code']) ?>" style="text-decoration: none;color:#004844;">توضيحات تكميلي و خريد</a></b>
    <br/><br/></b>
		</p>
   
     </div>
    </div>    
  </div>
  
  
  <br>
  
  </td>
    
<?php
    if ($counter % 3 == 0) 
        echo ("</tr><tr>");
} 

if ($counter % 3 != 0)
    echo ("</tr>");

?>  
</table>

<?php
include ("includes/footer.php"); 
?>
   
