<!DOCTYPE html>

<html>
  <head>
    <title>NoDD</title>
    <link rel="icon" type="image/x-icon" href="/img/hasan.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <h2> There's a lot of existing Project360 code and styles here that we don't have access to yet </h2>
    
   <?php 
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "NoDD";

   $conn = mysqli_connect($servername, $username, $password, $dbname);
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
   


   ?>

<form method="POST" id="form1">

    <table class = "table table-bordered table-sm col-md-2">
      <tr> 
         <td></td>
         <td>A</td>
         <td>B</td>
         <td>C</td>
      </tr>
      <tr>
         <td>t_1</td>
         <td>
            <select name="a1" class="form-control form-control-sm">
               <option value="1">a_1</option>
               <option value="2">a_2</option>
               <option value="3">a_3</option>
            </select>
         </td>
         <td>
            <select name="b1" class="form-control form-control-sm">
               <option value="1">b_1</option>
               <option value="2">b_2</option>
               <option value="3">b_3</option>
            </select>
         </td>
         <td>
            <select name="c1" class="form-control form-control-sm">
               <option value="1">c_1</option>
               <option value="2">c_2</option>
               <option value="3">c_3</option>
            </select>
         </td>
      </tr>
      <tr>
         <td>t_2</td>
         <td>
            <select name="a2" class="form-control form-control-sm">
               <option value="1">a_1</option>
               <option value="2">a_2</option>
               <option value="3">a_3</option>
            </select>
         </td>
         <td>
            <select name="b2" class="form-control form-control-sm">
               <option value="1">b_1</option>
               <option value="2">b_2</option>
               <option value="3">b_3</option>
            </select>
         </td>
         <td>
            <select name="c2" class="form-control form-control-sm">
               <option value="1">c_1</option>
               <option value="2">c_2</option>
               <option value="3">c_3</option>
            </select>
         </td>
      </tr>
      <tr>
         <td>t_3</td>
         <td>
            <select name="a3" class="form-control form-control-sm">
               <option value="1">a_1</option>
               <option value="2">a_2</option>
               <option value="3">a_3</option>
            </select>
         </td>
         <td>
            <select name="b3" class="form-control form-control-sm">
               <option value="1">b_1</option>
               <option value="2">b_2</option>
               <option value="3">b_3</option>
            </select>
         </td>
         <td>
            <select name="c3" class="form-control form-control-sm">
               <option value="1">c_1</option>
               <option value="2">c_2</option>
               <option value="3">c_3</option>
            </select>
         </td>
      </tr>
    </table>
    
    
    <table class="table col-8 table-bordered" id="myTable">
      <tr>
        <th>Functional Dependency</th>
        <th>True</th>
        <th>False</th>
        <th>Tuples</th>
        <th>LHS Columns</th>
	<th>RHS Columns</th>
        <th>Observation</th>
      </tr>
      <tr>
      <td><input type="text" style="" name="fd"></td>
        <td><input type="radio" name="truefalse" value="true"></td>
        <td><input type="radio" name="truefalse" value="false"></td>
	<td>
	  <input type="checkbox" name="tuples1" id="t1" value="t1">
	  <label>T1</label><br>
	  <input type="checkbox" name="tuples2" id="t2" value="t2">
	  <label>T2</label><br>
	  <input type="checkbox" name="tuples3" id="t3" value="t3">
	  <label>T3</label><br>
        </td>
	<td>
	  <input type="checkbox" name="lhs1" id="A" value="A">
	  <label>A</label><br>
	  <input type="checkbox" name="lhs2" id="B" value="B">
	  <label>B</label><br>
	  <input type="checkbox" name="lhs3" id="C" value="C">
	  <label>C</label><br>
	</td>
	<td>
	  <input type="checkbox" name="rhs1" id="A" value="A">
	  <label>A</label><br>
	  <input type="checkbox" name="rhs2" id="B" value="B">
	  <label>B</label><br>
	  <input type="checkbox" name="rhs3" id="C" value="C">
	  <label>C</label><br>
	</td>
        <td><input type="text" name="obs" style=""></td>
      </tr>

    </table>

      <label for="pnum">Problem Number:</label>
      <input type="text" id="pnum" name="pnum"><br><br>
      
</form>

    <button type="submit" class="btn btn-secondary" form="form1" name="submit" onclick="insert_problem()">Submit</button>



   <button type="button" class="btn btn-secondary" onclick="myCreateFunction()">Create row</button>
   <button type="button" class="btn btn-secondary" onclick="myDeleteFunction()">Delete row</button>


   <p>
      <?php
         $pnum = $_POST['pnum'];
         $obs = $_POST['obs'];
         $fd = $_POST['fd'];
         $tuples1 = $_POST['tuples1'];
         $tuples2 = $_POST['tuples2'];
         $tuples3 = $_POST['tuples3'];
         $lhs1 = $_POST['lhs1'];
         $lhs2 = $_POST['lhs2'];
         $lhs3 = $_POST['lhs3'];
         $rhs1 = $_POST['rhs1'];
         $rhs2 = $_POST['rhs2'];
         $rhs3 = $_POST['rhs3'];
         if($_POST['truefalse'] == 'true'){
            $choice = 1;
         }else{
            $choice = 0;
         }

         $a1 = $_POST['a1'];
         $a2 = $_POST['a2'];
         $a3 = $_POST['a3'];
         $b1 = $_POST['b1'];
         $b2 = $_POST['b2'];
         $b3 = $_POST['b3'];
         $c1 = $_POST['c1'];
         $c2 = $_POST['c2'];
         $c3 = $_POST['c3'];
      ?>
   </p>

   <a href="index.php" class="btn btn-primary">Student View</a>

<script>
   i = 0;
function myCreateFunction() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  cell1.innerHTML = '<td><input type="text" style=""></td>';
  cell2.innerHTML = '<td><input type="radio" name="truefalse_' + i + '" value="true"></td>';
  cell3.innerHTML = '<td><input type="radio" name="truefalse_' + i + '" value="false"></td>';
  cell4.innerHTML = '<td><input type="checkbox" name="tuples" id="t1" value="t1"> <label>T1</label><br><input type="checkbox" name="tuples" id="t2" value="t2"> <label>T2</label><br><input type="checkbox" name="tuples" id="t3" value="t3"> <label">T3</label><br></td>';
  cell5.innerHTML = '<td><input type="checkbox" name="tuples" id="A" value="A"> <label>A</label><br><input type="checkbox" name="tuples" id="B" value="B"> <label>B</label><br><input type="checkbox" name="tuples" id="C" value="C"> <label>C</label><br></td>';
  cell6.innerHTML = '<td><input type="checkbox" name="tuples" id="A" value="A"> <label>A</label><br><input type="checkbox" name="tuples" id="B" value="B"> <label>B</label><br><input type="checkbox" name="tuples" id="C" value="C"> <label>C</label><br></td>';
  cell7.innerHTML = '<td><input type="text" style=""></td>';
  i++;
}

function myDeleteFunction() {
  document.getElementById("myTable").deleteRow(-1);
}

function insert_problem(){
   <?php
   $sql = "INSERT INTO `Problems` (`problem_id`, `A1`, `A2`, `A3`, `B1`, `B2`, `B3`, `C1`, `C2`, `C3`) VALUES ('$pnum', '$a1', '$a2', '$a3', '$b1', '$b2', '$b3', '$c1', '$c2', '$c3')";
   $rs = mysqli_query($conn, $sql);
   $sql = "INSERT INTO `Teacher` (`pnum`, `obs`, `fd`, `choice`, `Tuples1`, `Tuples2`, `Tuples3`, `Lhs1`, `Lhs2`, `Lhs3`, `Rhs1`, `Rhs2`, `Rhs3`) VALUES ('$pnum', '$obs', '$fd', '$choice', '$tuples1', '$tuples2', '$tuples3', '$lhs1', '$lhs2', '$lhs3', '$rhs1', '$rhs2', '$rhs3')";
   $rs = mysqli_query($conn, $sql);
   
   ?>
}

/*
CREATE TABLE `NoDD`.`Teacher` (`pnum` INT NOT NULL , `obs` VARCHAR(255) NOT NULL , `fd` VARCHAR(255) NOT NULL , `choice` INT NOT NULL , `tuples1` VARCHAR(5) NOT NULL , `tuples2` VARCHAR(5) NOT NULL , `tuples3` VARCHAR(5) NOT NULL , `lhs1` VARCHAR(5) NOT NULL , `lhs2` VARCHAR(5) NOT NULL , `lhs3` VARCHAR(5) NOT NULL , `rhs1` VARCHAR(5) NOT NULL , `rhs2` VARCHAR(5) NOT NULL , `rhs3` VARCHAR(5) NOT NULL ) ENGINE = InnoDB;
*/
</script>



  </body>
</html>
