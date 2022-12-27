
<?php

if( isset($_POST['search'])&& !empty($_POST['search']))
	 {
	$search=$_POST['search'];
     }else
	 exit("برخی از فیلد ها مقدار دهی نشده");
 
//..................

$link = mysqli_connect("localhost", "root", "", "tavon"); 

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

//....................

$query= "SELECT * FROM `products` WHERE `pro_name` = '$search'";
$result = mysqli_query($link, $query);   
$row = mysqli_fetch_array($result);  
if ($row) {
	$id=$row['pro_code'];
}
else{
	$id="#";
}
?>
<script type="text/javascript">
var ide="product_detail.php?id=<?php echo($id); ?>";
<!--
location.replace(ide);	 
-->
</script>