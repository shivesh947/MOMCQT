<?php
 include 'dbcon.php';
?>
<?php
$test=$_POST['whichtest'];
$array=$_POST['result'];
$array=json_decode($array);
$query1="SELECT `correctopt`  FROM `$test` ";
$run1=mysqli_query($con,$query1);
$i=0;
$right=0;
$wrong=0;

while($data=mysqli_fetch_assoc($run1))
{
    if($array[$i]==$data['correctopt'])
    {
        $right++;
    }
    else
    {
        $wrong++;
    }
   /* echo $array[$i]."=".$data['correctopt'];
    echo nl2br("\n");*/
    $i++;
}
?>
<script type="text/javascript">alert('<?php echo $right; ?> correct answer');</script>