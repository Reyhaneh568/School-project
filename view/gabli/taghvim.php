<!DOCTYPE html>
<html>
<head>
   <title>ریحانه خواجه یزدی </title>
</head>
<body dir="rtl">
<?php
include('header.php');
?>
<?php
$ruz=array("شنبه","یک شنبه","دو شنبه","سه شنبه","چهارشنبه","پنج شنبه","جمعه");

//............................................................فروردین......................................................................................
echo "<span style='color: #05A6A0;text-align:center;display:inline-block;float:right'>";
echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #12E0DA">');
echo "<h2>فروردین 1400</h2>";

for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}

echo ('<tr>');
  for($i=0;$i<=31;$i++)
   {
	   switch($i){
		   case 0:echo('<td>'."     ".'</td>');
		   $i++;
		   case 1:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		   case 2:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		   case 3:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		   case 4:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
	   }
	   switch($i){
		    case 9:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
	   }
		 switch($i){
		    case 12:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
	   }
	   //................ادامه دستور.........
	   
	   	if($i==6||$i==13||$i==20||$i==27)
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');	
    }
	else{
	 echo('<td>'.$i.'</td>');
	}

}
echo ('</table>');
echo ('</span>');
//.................................اردیبهشت............................
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<span style='color: #05A6A0;text-align:center;display:inline-block;'><h2>اردیبهشت 1400</h2>";

echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #12E0DA">');
for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}
echo ('<tr>');
  for($i=0;$i<=31;$i++)
   {
	 switch($i){
		   case 0:echo('<td>'."     ".'</td>');
		   echo('<td>'."     ".'</td>');
		   echo('<td>'."     ".'</td>');
		   echo('<td>'."     ".'</td>');
	 $i++;}
		    switch($i){
		   case 14:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
	   }
	   switch($i){
		   case 23:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
	   }
	   
	   //................ادامه دستور.........
	   
	
	if($i==3||$i==10||$i==17||$i==24||$i==31)
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');
    
	}
	else
	echo('<td>'.$i.'</td>');
}
echo ('</table>');
echo ('</span>');
//...............................خرداد..............................
echo "<span style='color:#05A6A0;text-align:center;display:inline-block;float:left'><h2>خرداد  1400</h2>";

echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #12E0DA">');
for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}

echo ('<tr>');

  for($i=1;$i<=31;$i++)
   {
	    switch($i){
		    case 15:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		    case 16:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		}
	 if($i%7==0)  
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');
    
	}
	else
	echo('<td>'.$i.'</td>');
}
echo ('</table>');
echo ('</span>');
//................................تیر..................................
echo "<br>";echo "<br>";
echo "<span style='color: #CC0099;text-align:center;display:inline-block;float:right'>";
echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #9900FF">');
echo "<h2>تیر 1400</h2>";

for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}

echo ('<tr>');
  for($i=0;$i<=31;$i++)
   {
	   switch($i){
		   case 0:echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');
		   $i++;
	   }
	   	    switch($i){
		    case 30:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		}
	   //................ادامه دستور.........
	   

	if($i==4||$i==11||$i==25||$i==18)
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');	
    }
	else{
	 echo('<td>'.$i.'</td>');
	}
}
echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');
echo ('</table>');
echo ('</span>');
//...................................مرداد...........................
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<span style='color:#CC0099;text-align:center;display:inline-block;'><h2>مرداد 1400</h2>";

echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #9900FF">');
for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}
echo ('<tr>');
  for($i=0;$i<=31;$i++)
   {
	 switch($i){
		   case 0:echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');
		   echo('<td>'."     ".'</td>');
		   echo('<td>'."     ".'</td>');
		   echo('<td>'."     ".'</td>');
		   $i++;
	   }
	   	    switch($i){
		    case 27:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		    case 28:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		}
	   //................ادامه دستور.........
	   
	
	if($i==1||$i==8||$i==15||$i==22||$i==29)
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');	
    }
	else{
	 echo('<td>'.$i.'</td>');
	}
}
echo ('</table>');
echo ('</span>');
//...............................شهریور..............................
echo "<span style='color:#CC0099;text-align:center;display:inline-block;float:left'><h2>شهریور 1400</h2>";

echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #9900FF">');
for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}

echo ('<tr>');

 for($i=0;$i<=31;$i++)
   {
	   switch($i){
		   case 0:echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');
		   $i++;
	   }
	   
	   //................ادامه دستور.........
	   
	
	if($i==5||$i==12||$i==26||$i==19)
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');	
    }
	else{
	 echo('<td>'.$i.'</td>');
	}
}
echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');
echo ('</table>');
echo ('</span>');
//.....................................مهر....................................................................................
echo "<span style='color: #FF950A;text-align:center;display:inline-block;float:right'>";
echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #B84B02">');
echo "<h2>مهر 1400</h2>";

for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}

echo ('<tr>');
  for($i=0;$i<=30;$i++)
   {
	   switch($i){
		   case 0:echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');
		   $i++;
	   }
	     switch($i){
		    case 5:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		 $i++;}
		  switch($i){
		    case 13:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		}
	   //................ادامه دستور.........
	   
	
	if($i==2||$i==9||$i==16||$i==23||$i==30)
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');	
    }
	else{
	 echo('<td>'.$i.'</td>');
	}
}
echo ('</table>');
echo ('</span>');
//.................................ابان............................
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<span style='color: #FF950A;text-align:center;display:inline-block;'><h2>ابان 1400</h2>";

echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #B84B02">');
for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}
echo ('<tr>');
  for($i=1;$i<=30;$i++)
   {
	  switch($i){
		    case 2:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		}
	if($i%7==0)
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');	
    }
	else{
	 echo('<td>'.$i.'</td>');
	}
}
echo "<tr>";
echo ('</table>');
echo ('</span>');
//...............................اذر..............................
echo "<span style='color:#FF950A;text-align:center;display:inline-block;float:left'><h2>اذر 1400</h2>";

echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #B84B02">');
for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}

echo "<tr>";

  for($i=0;$i<=30;$i++)
   {
	    switch($i){
		   case 0:echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');
		   $i++;
	   }
	   //................................
	
	if($i==5||$i==12||$i==19||$i==26)
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');	
    }
	else{
	 echo('<td>'.$i.'</td>');
	}
}
echo "<tr>";
echo ('</table>');
echo ('</span>');

//...............................................دی..................................
echo "<span style='color: #666600;text-align:center;display:inline-block;float:right'>";
echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #00FF00">');
echo "<h2>دی 1400</h2>";

for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}

echo ('<tr>');
  for($i=0;$i<=30;$i++)
   {
	   switch($i){
		   case 0:echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');
		   $i++;
	   }
	   	    switch($i){
		    case 16:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		}
	   //................ادامه دستور.........
	   
	
	if($i==3||$i==10||$i==24||$i==17)
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');	
    }
	else{
	 echo('<td>'.$i.'</td>');
	}
}
echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');
echo ('</table>');
echo ('</span>');
//.................................بهمن............................
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

echo "<span style='color: #666600;text-align:center;display:inline-block;'><h2>بهمن 1400</h2>";

echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #00FF00">');
for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}
echo ('<tr>');
  for($i=0;$i<=30;$i++)
   {
	 switch($i){
		   case 0:echo('<td>'."     ".'</td>');
		   echo('<td>'."     ".'</td>');
		   echo('<td>'."     ".'</td>');
		   echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');echo('<td>'."     ".'</td>');
		   $i++;
	   }
	   	    switch($i){
		    case 26:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		}
	   //................ادامه دستور.........
	   
	
	if($i==1||$i==8||$i==15||$i==22||$i==29)
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');	
    }
	else{
	 echo('<td>'.$i.'</td>');
	}
}
echo ('</table>');
echo ('</span>');
//...............................اسفند..............................
echo "<span style='color:#666600;text-align:center;display:inline-block;float:left'><h2>اسفند 1400</h2>";

echo ('<table width="480" height="50" border="2" cellpadding="5" cellspacing="3" style="text-align:center;border:5px solid #00FF00">');
for($ru=0;$ru<7;$ru++)
{
echo('<th>'.$ruz[$ru].'</th>');
}

echo ('<tr>');

  for($i=0;$i<=29;$i++)
   {
	    switch($i){
		   case 0:echo('<td>'."     ".'</td>');
		   $i++;
	   }
	   	    switch($i){
		    case 10:echo("<td><span style='color:#FF0000;'>$i</span></td>");
			$i++;}
		     switch($i){
		    case 29:echo("<td><span style='color:#FF0000;'>$i</span></td>");
		   $i++;
		}
	   //........................
	
	if($i==6||$i==13||$i==20||$i==27)
	{
		echo("<td><span style='color:#FF0000;'>$i</span></td>");
		echo ('<tr>');	
    }
	else{
	 echo('<td>'.$i.'</td>');
	}
}
echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');echo ('<tr>');
echo ('</table>');
echo ('</span>');
?>
<?php
include('footer.php');
?>
</body>
</html>