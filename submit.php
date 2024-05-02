<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "NoDD";

   $con = mysqli_connect($servername, $username, $password, $dbname);
   $pnum = $_POST['pnum'];

   $i = 0;
   $sql = "SELECT * FROM `Problems` WHERE problem_id = '$pnum'";
   $temp = mysqli_query($con, $sql);
if(mysqli_num_rows($temp) == 0){

   $a1 = $_POST['a1'];
   $a2 = $_POST['a2'];
   $a3 = $_POST['a3'];
   $b1 = $_POST['b1'];
   $b2 = $_POST['b2'];
   $b3 = $_POST['b3'];
   $c1 = $_POST['c1'];
   $c2 = $_POST['c2'];
   $c3 = $_POST['c3'];


$sql = "INSERT INTO `Problems` (`problem_id`, `A1`, `A2`, `A3`, `B1`, `B2`, `B3`, `C1`, `C2`, `C3`) VALUES ('$pnum', '$a1', '$a2', '$a3', '$b1', '$b2', '$b3', '$c1', '$c2', '$c3')";
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Problem successfully inserted!";
}
while(isset($_POST["obs_$i"])){
   $obs = $_POST["obs_$i"];
   $fd = $_POST["fd_$i"];
   $tuples1 = $_POST["tuples1_$i"];
   $tuples2 = $_POST["tuples2_$i"];
   $tuples3 = $_POST["tuples3_$i"];
   $lhs1 = $_POST["lhs1_$i"];
   $lhs2 = $_POST["lhs2_$i"];
   $lhs3 = $_POST["lhs3_$i"];
   $rhs1 = $_POST["rhs1_$i"];
   $rhs2 = $_POST["rhs2_$i"];
   $rhs3 = $_POST["rhs3_$i"];
   if($_POST["truefalse_$i"] == 'true'){
      $choice = 1;
   }else{
      $choice = 0;
   }

$sql = "INSERT INTO `Teacher` (`pnum`, `obs`, `fd`, `choice`, `Tuples1`, `Tuples2`, `Tuples3`, `Lhs1`, `Lhs2`, `Lhs3`, `Rhs1`, `Rhs2`, `Rhs3`) VALUES ('$pnum', '$obs', '$fd', '$choice', '$tuples1', '$tuples2', '$tuples3', '$lhs1', '$lhs2', '$lhs3', '$rhs1', '$rhs2', '$rhs3')";
$rs = mysqli_query($con, $sql);
$i = $i + 1;
}
}
else{
   echo "This problem already exists!";
}
?>

<p>Click this link to go back to the problem creation page: </p>
<a href="teacher.php" class="btn btn-primary">Teacher View</a>
