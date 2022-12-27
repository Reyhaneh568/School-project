<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>por</title>
<style type="text/css">
        .myto{
			border: none;
    background-color: #000787;
    color: #fff;
    padding: 5px 10px;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    border-radius:50%;

		}
		.myto:hover{
			 background-color:#008F7B;
	         border-radius:45%;	
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
    background-color: #00D5B7;
    border-radius: 50px;
		}
		b.fon{
			text-align: center;
			font-family:"MRT_Zohal","Urdu Typesetting";
		}
	.btn{
 border:none;
 background-color:#000384;
 color:#fff;
 padding:7px 30px;
 text-decoration:none;
 display: inline-block;
 cursor: pointer;
 border-radius:15px;
}

.btn:hover{
    background-color: #02C0C9;
    border-radius:30px;

}
.mybtn{
 border:none;
 background-color:#000384;
 color:#fff;
 padding:7px 30px;
 text-decoration:none;
 display: inline-block;
 cursor: pointer;
 border-radius:2px;
	border-bottom-left-radius: 40%;
	border-bottom-right-radius: 40%;
}

.mybtn:hover{
    background-color: #02C0C9;
	border-bottom-left-radius: 55%;
	border-bottom-right-radius: 55%;
}



body {
    background-color: #F3F8D5;
}
</style>
</head>

<body dir="rtl">
	<?php
	include('header.php');
	?>
	
	
<br>

	
		  <script>
		  <!--
	    function baresi(){
	    var pa=document.getElementById("passfi").value;
		var repa=document.getElementById("repassfi").value; 
       if(pa!= repa)
		var d=alert("کلمه عبور و تکرار ان مشابه نیست");
	   else{
		   var t=confirm("از صحت اطلاعات اطمینان دارید ؟");
		   if(t==true){
			   document.ozvit.submit();
		   }
	   }
	  }
	  -->
	  </script>

<form method="POST" dir="rtl" action="vas.php" name="ozvit">
	  
  <p>
	    <strong>
	    <label for="textfield">نام:</label>
	    <input type="text" name="namefi" id="namefi" placeholder="نام شما" style=" border-radius: 5px;" required>
      </strong></p>
	  <p>
	    <strong>
        <label for="textfield2">نام خانوادگی:</label>
        <input type="text" name="familyfi" id="familyfi" placeholder="فامیلی شما" style=" border-radius: 5px;" required>
      </strong></p>
	  <p>
	    <strong>
        <label for="textfield3">کاربر نشانی:</label>
        <input name="locationfi" type="text" id="locationfi" size="40" placeholder="شماره تلفن . ایمیل . نام کاربری" style=" border-radius: 5px;" required>
</strong></p>
	  	  <p>
	    <strong>
	    <label for="textfield">رمز عبور:</label>
	    <input type="password" name="passfi" id="passfi" placeholder="نام شما" style=" border-radius: 5px;" required>
      </strong></p>
	  
	    <p>
	    <strong>
	    <label for="textfield">تکرار رمز ورود:</label>
	    <input type="password" name="repassfi" id="repassfi" placeholder="نام شما" style=" border-radius: 5px;" required>
      </strong></p>

	
	    <p>&nbsp;      </p>
	    <p>
	      <input  type="button"  form="Action" value="ثبت" class="btn" onclick="baresi()">
	    <input type="reset" value="بازنشانی" form="Action" class="btn">
      </p> 
	<br>	
<br>
<br><br>
    <a href="http://localhost/mozic/view/new1.php">
	<img src="../img/تاریخ-4-0۹.png" alt="تاریخ" width="23" height="23" class="myto" style="display:inline-block" /></a>
    </form>
	
	
<?php
	include('footer.php');
	?>


</body>
</html>