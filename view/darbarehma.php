<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>درباره ما</title>
<style>

.container {
  position: relative;
  width: 100%;
  align:center;
}

.image {
	border-style:dotted double dotted double;
  border-radius:50%;
  opacity: 1;
  display: block;
  width: 140px;
  height: 140px;
  transition: .5s ease;
  
}

.middle {
	
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 46%;
  -ms-transform: translate(-50%, 10%);
}

.container:hover .image {
  opacity: 0.7;
}

.container:hover .middle {
  opacity:1;
}

.text {

  color: #3c3c3d;
  font-size: 10px;

}
</style>
</head>

<body >
		<?php
	include ("includes/header.php");
	?>
<br>
<b><p  style="font-size:30px;text-align:center">درباره ما </b><br>

	<b style="font-size:15px;">سلام و احترام <br>
	امیدواریم از کالا های با کیفیت ما خوشتان امده باشد . هدف ما فقط جلب رضایت شما است<br>
	جهت برخورد با مشکل به ما گزارش دهید  و تا 24 ساعت شکیبا باشید . درصورت ادامه دار شدن مشکل با پشتیبان تماس بگیرید
	<br>
	 تماس با پشتیبان:09159877587
	<br><br>
	<div class="container" align="center">
	<img src="..\images\products\rey2.jpg" class="image">
	<div class="middle">
    <div class="text">Web Developer:<br>reyhaneh khajeYazdi </div>
	</div>
	</div>
</p>
<?php
include ("includes/footer.php");

	?>


</body>
</html>
