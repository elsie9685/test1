<?php
   if(isset($_POST["num1"]) && isset($_POST["num2"]))
  {
  	echo $_POST["num1"]+$_POST["num2"];
    exit();
  }
?>

<html>
<head>

<script type="text/javascript">

var xhr;
function run_ajax()
{ 
	 //Step1
   xhr=new XMLHttpRequest();
   if(xhr.overrideMimeType)
   {
   	xhr.overrideMimeType("text/xml");
   }
   //step2
   xhr.onreadystatechange=getData;
   //step3
   xhr.open("post","tadd.php",true);
   xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=UTF-8");
   //step4
   value1=document.getElementById('num1').value;
   value2=document.getElementById('num2').value;
   xhr.send("num1="+value1+"&num2="+value2);

}

function getData()
{
 if(xhr.readyState==4)
 	if(xhr.status==200)
 		document.getElementById("show").innerHTML=xhr.responseText;
 
}

</script>

</head>

<input type="text" name="num1" id="num1">+
<input type="text" name="num2" id="num2">
<button type="submit" onClick="run_ajax();">=</button>

<span id="show">?</span>

  
</html>