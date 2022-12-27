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

	
		

<form method="POST" dir="rtl" action="action_vorud.php" name="vorud">
	  
  <p>
	    <strong>
	    <label for="textfield">نام:</label>
	    <input type="text" name="name" id="namefi" placeholder="نام شما" style=" border-radius: 5px;" required>
      </strong></p>
	  <p>
	    <strong>
        <label for="textfield2">نام خانوادگی:</label>
        <input type="text" name="family" id="familyfi" placeholder="فامیلی شما" style=" border-radius: 5px;" required>
      </strong></p>
	  
	  	  <p>
	    <strong>
	    <label for="textfield">رمز عبور:</label>
	    <input type="password" name="pass" id="passfi" placeholder="نام شما" style=" border-radius: 5px;" required>
      </strong></p>
	  


	
	 
	    <p>
	      <input  type="submit" value="ثبت" class="btn">
	    <input type="reset" value="بازنشانی"class="btn">
      </p> 
	<br>	
<br>
<br><br>
    </form>
	
	
<?php
	include('footer.php');
	?>


</body>
</html>