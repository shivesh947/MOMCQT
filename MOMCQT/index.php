<!DOCTYPE html>
<html>
<head>
	<title>Test Maker</title>
</head>
<script type="text/javascript">
	function fun(){
		var x=document.getElementById('txtbox').value;
		document.getElementById('which').value=x;
		document.getElementById('myform').submit();
	}
</script>
<style type="text/css">
	body{
		margin: 0px;
		background-image: url(images.jpg);
		    background-size: 100vw 100vh;

		background-repeat: no-repeat;
	}
	*{
		outline: none;
	}
	#txtbox{
		width: 65vw;
		height: 40px;
		font-size: 30px;
		margin-left: 10vw;
		margin-top: 25vh;
		border-bottom-left-radius: 25px;
    	border-top-left-radius: 25px;
	
    	border-style: inset;
	    box-shadow: 6px 6px 9px 0px #372d72;
	        background-color: #a58ee1b8;
	        text-align: center;
	        border: 3px solid #d7d3e1;
    
	}
	#bbut{
	    font-size: 30px;
	    height: 49px;
	    width: 15vw;
	    border-bottom-right-radius: 25px;
    	border-top-right-radius: 25px;
	        box-shadow: 6px 6px 9px 0px #372d72;
    background-color: rgb(215, 211, 225);
	
	}
	#linkss{
		font-size: 20px;
	}
	#linkss a{
		text-decoration: none;
		color: black;
		font-size: 40px;

	}
	#back{
		margin-top: 100px;
		height: 150px;
	}
</style>
<body>
	<div>
	<center><img src="back.png" id="back"></center>
	<input type="text" name="" id="txtbox"><input type="button" name="" onclick="fun()" id="bbut" value="Search">
	<center><p id="linkss"><a href="newtestcreate.php">Create new test</a></p></center>

</div>
	<form action="Dashboard.php" method="POST" id="myform">
		<input type="hidden" id="which" name="which">
	</form>
</body>
</html>
