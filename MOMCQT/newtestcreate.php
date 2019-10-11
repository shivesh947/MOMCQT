<!DOCTYPE html>
<html>
<head>
    <title>Create Test</title>
    <style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>
    <style type="text/css">
        *{
        outline: none;
    }
        body{
            margin:0;
            background-image: url(images.jpg);
            background-size: 100vw 100%;
            background-repeat: no-repeat;
        }
        #package{
            height: 100%;
            width: 80vw;
            margin-top: 10vh;
            margin-left: 10vw;
            background-color: #251d3fb3;
            background-image: linear-gradient(45deg, #00000099, #90aaf4c7);
            
        }
        #package #head{
            font-size:80px;
        }
      
        #mainform form {
            width: 80vw;
            height: 70vh;

        }
        #mainform form input{
            width: 40vw;
            height: 50px;
            font-size: 20px;
        }
        #file{
            width: 70vw;
        }
        label,a,p{
            color: black;
            font-size: 25px;
        }
    </style>
</head>
<body>
<div id="package">
<center><p id="head">Create Test</p></center>
<div id="mainform">
<form enctype="multipart/form-data" method="post" role="form" id="myformdata" action="createtable.php">
    <center><div class="form-group">
        <input type="text" placeholder="your link keyword" name="keys" required><br>
        <br><label for="exampleInputFile">File Upload</label><br>
       <!--  .csv,.xls,.xlsx -->
        <input type="file" accept=".csv,.xls,.xlsx/*"  name="file" id="file" size="150" required>
        <p class="help-block">Only Excel/CSV (.csv,.xls,.xlsx) File Import.</p>
        <div class="tooltip"><a href="sample.csv" download>use this formate only</a>
            <span class="tooltiptext">Download sample</span>
        </div>
        <br><br>
        <input type="submit" value="Register" name="submit"> 

    </div>
</center>
</form>

<div>
</div>
</body>
</html>