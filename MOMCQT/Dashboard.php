<?php
 include 'files/dbcon.php';
?>
<?php
$test=$_POST['which'];
if($test=='')
{
	?><script>window.open('index.php','_self')</script><?php
}
$checkpresent="SELECT `key` FROM `registerd_links_key` WHERE `key`='$test'";
$runcheck=mysqli_query($con,$checkpresent);

$num_rows=mysqli_num_rows($runcheck);
if($num_rows<=0)
{
	?>
	<script>alert("YOUR TEST IS NOT FOUND");window.open('index.php','_self')</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<style type="text/css">
	*{
		outline: none;
	}
	body{
		margin:0;
	}
	#paper{
		width: 90vw;
		margin-left: 2.5vw;
		border:2px solid black;
		padding:20px;
		font-size: 20px;
		
	}
	#subme{
		width: 90vw;
		font-size: 20px;
		height: 50px;
	}
	@media (max-width: 1000px)
	{
		#paper{font-size: 30px;}
		#subme{font-size: 20px;}
	}
</style>
<script type="text/javascript">  
    function checkalltick(){
    	var val=0;
    	var x=document.getElementsByClassName('opt');
    	var n=x.length/4;  
    	for(var i=0;i<x.length;i++)
		{
			if(x[i].checked==true)
			{
				val++;
			}
		}
		if(val==n)
		{
			show();
		}
		else
		{
			alert("seect at least one option")
		}
    }
    var arr=[];
    function show(){
		var t=0;
		var x=document.getElementsByClassName('opt');
		for(var i=0;i<x.length;i++)
		{
			if(x[i].checked==true)
			{
				arr[t]=x[i].value;
				t++;
			}
		}
		t=0;
		//console.log(arr);
		arr=JSON.stringify(arr);
		document.getElementById('resultis').value=arr;
		formsubmit();
		arr=JSON.parse(arr);
	}
	
</script>
<body>
  <div id="paper">
  	<center><h1><?php echo $test; ?></h1></center>
  	<hr>
  	<?php
     
      $query="SELECT * FROM $test ";
      $run=mysqli_query($con,$query);

     while($data1=mysqli_fetch_assoc($run))
   {
    ?>
    <div>
    	<p><?php echo $data1['sno']; ?> <?php echo $data1['Question']; ?></p>
    	<div>
    		<input type="radio" name="<?php echo $data1['sno']; ?>" class="opt"  value="<?php echo $data1['optA']; ?>">
    		<span><?php echo $data1['optA']; ?></span><br>
    		<input type="radio" name="<?php echo $data1['sno']; ?>" class="opt" value="<?php echo $data1['optB']; ?>">
    		<span><?php echo $data1['optB']; ?></span><br>
    		<input type="radio" name="<?php echo $data1['sno']; ?>" class="opt" value="<?php echo $data1['optC']; ?>">
    		<span><?php echo $data1['optC']; ?></span><br>
    		<input type="radio" name="<?php echo $data1['sno']; ?>" class="opt" value="<?php echo $data1['optD']; ?>">
    		<span><?php echo $data1['optD']; ?></span><br>
    	</div>
    </div>
    <?php
    }
  	?>
  <br>
  <center><input id="subme" type="button" onclick="checkalltick()" value="Submit" name=""></center>
  <br>
  </div>
  <form action="files/checkresult.php" method="POST" style="display: none;" id="sendresult"> 
  	<input type="hidden" value="<?php echo $test; ?>" name="whichtest">
  	<input type="hidden" id="resultis" value="" name="result">
  </form>
  <div id="dataget">
  	
  </div>
  <script type="text/javascript">
     function formsubmit()
     {
      $.ajax({
        type: 'POST',
        url: 'files/checkresult.php',
        data: $('#sendresult').serialize(),
         success : function(result)
        {
          $('#dataget').html(result);
        }
      });
      return false;
     }
    </script>
</body>
</html>