<!doctype html>
<html>
<head>
<style>
.form{
	background-color:#bfbfbf;
	border-style:solid;
	border-radius:25%;
	width:290px;
	height:300px;
	
}
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
    background-color: #00D5B7;
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
 border-radius:2px;
	border-bottom-left-radius: 40%;
	border-bottom-right-radius: 40%;
}

.mybtn:hover{
    background-color: #02C0C9;
	border-bottom-left-radius: 55%;
	border-bottom-right-radius: 55%;
}
</style>
<meta charset="utf-8">
<title>علی قلیچ</title>
</head>

<body>
     <br>
    <b>
	
	
	<div style="background-color:#3d3d3c;box-shadow: 2px 2px 10px rgba(0,0,0,1);text-align: center;border: groove;border-top-left-radius: 5px;border-top-right-radius: 5px">

		<br>
	 
	  
	  
	  
<center>

	<br>

    <div class="form">
	<br>
	<b>ارسال نظر</b> 
	<br><br>
        <form method="post" >
		
            <input type="text" style=" border-radius: 7px;"align="center" name="name" placeholder=" name..">
			<br><br>
            <input type="email" style=" border-radius: 7px ;"align="center" name="email" placeholder=" email@gmail.com"><br><br>
            <textarea name="text" style=" border-radius: 7px;"align="center" placeholder=" comment.."></textarea><br>
			        <?php
		$link= mysqli_connect("localhost", "root", "", "tavon");
            if(isset($_POST['submit'])){
                $name  = $_POST['name'];
                $email = $_POST['email'];
                $text  = $_POST['text'];
                    if(empty($name)){
                        echo "نام خود را وارد کنید";
                    }elseif(empty($email)){
                        echo "ایمیل خود را وارد کنید";
                    }elseif(empty($text)){
                        echo "نظر خود را وارد کنید";
                    }elseif(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
                        echo "ایمیل صحیح نیست";
                    }else{
                        $query="INSERT INTO `coument` (`name`, `gmail`, `coument`) VALUES ('$name', '$email', '$text')";
                            $insert = mysqli_query($link,$query);
                                if($insert){
                                    echo "نظر شما با موفقیت ثبت شد";
                                }else{
                                    echo "به مشکل برخوردیم...";
                                }
                    }
            }
			
        ?>
		<br>
            <input type="submit" class="my" name="submit" align="center" value="ارسال"><br>
        </form>
		

    </div>
<br><br>
    
	<div style="width:1470px; background-color:#000B87;box-shadow: 2px 2px 10px rgba(0,0,0,1);text-align: center;color: antiquewhite" name="text30"><h4><strong>نظرات شما</strong></h4></div><br>
	<b style='margin-left: inherit;margin-right: auto;display:inline-block'>
    <div>
        <?php
            $select="SELECT * FROM coument";

                $run=mysqli_query($link,$select);
                    while($row=mysqli_fetch_array($run)){
                        $S_name    = $row['name'];
                        $S_opinion = $row['coument'];
        ?>
            
                <div style="width:1000px; background-color: #636363; border-top-left-radius: 7px; box-shadow: 1px 1px 5px rgba(0,4,5,0.5);
				border-top-right-radius: 7px"	align="right" name="text31"> : <?php echo $S_name; ?>  
				

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div>
                <div name="text32" style="width:1000px;height:35px; background-color:antiquewhite;box-shadow: 1px 1px 5px rgba(0,4,5,0.5);
				border-bottom-left-radius:7px;border-bottom-right-radius:7px"align="right">
				
				<?php echo $S_opinion; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				</div>
				<br>
            
        <?php
                    }
        ?>
    </div>
	  </center>

<script>
var s=1;

function pelas(){
var apelas=1;
s=s+1;

document.getElementById("ro").value=s;
}

function maines(){
var amaines=1;
s=s-1;
document.getElementById("ro").value=s;
}
document.getElementById("ro").value=s;
</script>

<script>
var s1=1;

function pelas1(){
var apelas1=1;
s1=s1+1;

document.getElementById("ro2").value=s1;
}

function maines1(){
var amaines1=1;
s1=s1-1;
document.getElementById("ro2").value=s1;
}
document.getElementById("ro2").value=s1;
</script>

<br><br>
<br><br>

<hr width="700px" /><hr width="600px" />
	<b name="text41" style="color:#ffffff;"> 
	( تمامی حقوق برای وبسایت تعاون محفوظ است)<br>
	
		توسعه دهنده : ریحانه خواجه یزدی
		
	</b><br><br>
    <a href="darbarehma.php"><img src="../images/tavon.png" width="90" height="65" alt=""/></a>
<br><br><br>
</div>
	
	


</body>
</html>



	<?php
/*	if(isset($_GET['tx1']) && !empty($_GET['tx1'])){
    $nam=$_GET['tx2'];
    $email=$_GET['tx1'];
    $coument=$_GET['tx3'];
	
	echo "
	
	<div style='height: 20px; width: 800px; background-color: #636363; border-top-left-radius: 7px; border-top-right-radius: 7px'
		align='right' name='text31'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  کاربر : $nam  </div>
	  
		<div name='text32'style='height:38px;width: 800px;background-color:antiquewhite;box-shadow: 1px 1px 5px rgba(0,0,0,1);border-radius:7px'align='right'>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $coument 
        
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src='../img/like-۱۱.png' width='20' height='25'  onclick='pelas8()'/>
	<input type='text' id='ro8' size='1' style=' border-radius: 7px; text-align:center' >
    <img src='../img/dislike-۱۱.png' width='20' height='25'  onclick='maines8()'/>
	
<script>
var s8=1;

function pelas8(){
var apelas8=1;
s8=s8+1;

document.getElementById('ro8').value=s8;
}

function maines8(){
var amaines8=1;
s8=s8-1;
document.getElementById('ro8').value=s8;
}
document.getElementById('ro8').value=s8;
</script>
		</div>
		<br>
		";
	} 
	
					<span align="left" style="display:inline-block;float:left;hight:30px" >
				&nbsp;&nbsp;&nbsp;
				<img src="../images/like-۱۱.png" width="20" height="25" alt="" onclick="pelas()"/>
	            <input type="text" id="ro" size="1" style=" border-radius: 7px; text-align:center" "/>
                <img src="../images/dislike-۱۱.png" width="20" height="25" alt="" onclick="maines()"/>
				
				</span>
	
	
	*/
    ?>
	