<?php
 include 'files/dbcon.php';
?>
<?php
$mykey=$_POST['keys'];
//echo $mykey;
$checkpresent="SELECT `key` FROM `registerd_links_key` WHERE `key`='$mykey'";
$runcheck=mysqli_query($con,$checkpresent);

$num_rows=mysqli_num_rows($runcheck);
//echo $num_rows;

if($num_rows<=0)
{
$sql="INSERT INTO `registerd_links_key`(`key`) VALUES ('$mykey')";
$runcheck=mysqli_query($con,$sql);

$createtable="CREATE TABLE `mockfiles`.`$mykey` (`sno` int NOT NULL ,`Question` VARCHAR(1000) NOT NULL , `optA` VARCHAR (500) NOT NULL , `optB` VARCHAR (500) NOT NULL , `optC` VARCHAR(500) NOT NULL, `optD` VARCHAR (500) NOT NULL, `Correctopt` VARCHAR (500) NOT NULL) ENGINE = InnoDB;";

$runcheck=mysqli_query($con,$createtable);

if(isset($_POST["submit"]))
  {

          if(!$con)
          {
          die('Could not Connect My Sql:' .mysqli_error());
          }
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          $c = 0;
          while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
         {
          $op1 = $filesop[0];
          $op2 = $filesop[1];
          $op3 = $filesop[2];
          $op4 = $filesop[3];
          $op5 = $filesop[4];
          $op6 = $filesop[5];
          $op7 = $filesop[6];
          $sql="INSERT INTO `$mykey`(`sno`,`Question`, `optA`, `optB`, `optC`, `optD`, `Correctopt`) VALUES ('$op1','$op2','$op3','$op4','$op5','$op6','$op7')";
          $stmt = mysqli_prepare($con,$sql);
          mysqli_stmt_execute($stmt);

         $c = $c + 1;
         }
        if($sql)
          {
               ?><script>console.log("Your Registration successfully");</script>
         <?php
             } 
         else
          {
             ?><script>console.log("Sorry! Unable to impo.");</script><?php
          }

  }
  ?><script>alert("Your Registration successfully");window.open('index.php','_self');</script>
         <?php
}
else
{
   ?>
   <script>alert("Sorry Use different key");window.open('newtestcreate.php','_self');</script>
   <?php
}
?>

