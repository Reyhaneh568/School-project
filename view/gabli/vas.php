<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body bgcolor="#F3F8D5" dir="rtl">
<?php
include('header.php');
?>

<?php

if( isset($_POST['namefi'])&& !empty($_POST['namefi'])&& 
    isset($_POST['familyfi'])&& !empty($_POST['familyfi'])&&
	isset($_POST['passfi'])&& !empty($_POST['passfi'])&&
	isset($_POST['repassfi'])&& !empty($_POST['repassfi'])&&
	 isset($_POST['locationfi'])&& !empty($_POST['locationfi']))
	 {
	$rename=$_POST['namefi'];
	$refamily=$_POST['familyfi'];
	$location=$_POST['locationfi'];
	$pass=$_POST['passfi'];
	$repass=$_POST['repassfi'];
	$email=$_POST['locationfi'];
     }
	 else
	 exit("برخی از فیلد ها مقدار دهی نشده");


$link=mysqli_connect("localhost","root","","ozviat");
if(mysqli_connect_errno()){
	exit("خطای با شرح زیر رخ داده :".mysqli_connect_errno());
}
$query="INSERT INTO `ozv` VALUES ('$rename', '$refamily', '$location', '$pass')";
if(mysqli_query($link,$query)===true)
	echo("<br><br>"."<p style='color:green;'><b>".$rename.
    "گرامی عضویت شما با نام کاربری".$refamily.
	"در فروشگاه با موافقیت انجام شد"."</b></p>");
else
	echo("<p style='color:red;'><b>عضویت شما در فروشگاه انجام نشد </b></p>");

mysqli_close($link);
?>



<?php
echo "<br/>
<table dir='rtl' border='solid' >";
$td=" <td> ";
$tdd=" </td> ";
$tr="<tr>";
$trr="</tr>";
echo($td."name: ".$tdd.$td.$rename.$tdd."<br/>".$tr);
echo($td."family: ".$tdd.$td.$refamily.$tdd."<br/>".$tr);
echo($td."email: ".$tdd.$td.$location.$tdd."<br/>".$tr);
echo($td."password: ".$tdd.$td.$pass.$tdd."<br/>".$tr);
echo "</table>";

?>
	
<?php
	include('footer.php');
	?>
</body>
</html>

