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
            <select class="form-control form-control-sm">
               <option>a_1</option>
               <option>a_2</option>
               <option>a_3</option>
            </select>
         </td>
         <td>
            <select class="form-control form-control-sm">
               <option>b_1</option>
               <option>b_2</option>
               <option>b_3</option>
            </select>
         </td>
         <td>
            <select class="form-control form-control-sm">
               <option>c_1</option>
               <option>c_2</option>
               <option>c_3</option>
            </select>
         </td>
      </tr>
      <tr>
         <td>t_2</td>
         <td>
            <select class="form-control form-control-sm">
               <option>a_1</option>
               <option>a_2</option>
               <option>a_3</option>
            </select>
         </td>
         <td>
            <select class="form-control form-control-sm">
               <option>b_1</option>
               <option>b_2</option>
               <option>b_3</option>
            </select>
         </td>
         <td>
            <select class="form-control form-control-sm">
               <option>c_1</option>
               <option>c_2</option>
               <option>c_3</option>
            </select>
         </td>
      </tr>
      <tr>
         <td>t_3</td>
         <td>
            <select class="form-control form-control-sm">
               <option>a_1</option>
               <option>a_2</option>
               <option>a_3</option>
            </select>
         </td>
         <td>
            <select class="form-control form-control-sm">
               <option>b_1</option>
               <option>b_2</option>
               <option>b_3</option>
            </select>
         </td>
         <td>
            <select class="form-control form-control-sm">
               <option>c_1</option>
               <option>c_2</option>
               <option>c_3</option>
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
      <td><input type="text" style="" name="fd" value="<?php if (isset($_POST['fd'])) echo $_POST['fd']; ?>"></td>
        <td><input type="radio" name="truefalse" value="true"></td>
        <td><input type="radio" name="truefalse" value="false"></td>
	<td>
	  <input type="checkbox" name="tuples1" id="t1" value="t1" <?php if (isset($_POST['tuples1'])) echo "checked='checked'"; ?>>
	  <label>T1</label><br>
	  <input type="checkbox" name="tuples2" id="t2" value="t2" <?php if (isset($_POST['tuples2'])) echo "checked='checked'"; ?>>
	  <label>T2</label><br>
	  <input type="checkbox" name="tuples3" id="t3" value="t3" <?php if (isset($_POST['tuples3'])) echo "checked='checked'"; ?>>
	  <label>T3</label><br>
        </td>
	<td>
	  <input type="checkbox" name="lhs1" id="A" value="A" <?php if (isset($_POST['lhs1'])) echo "checked='checked'"; ?>>
	  <label>A</label><br>
	  <input type="checkbox" name="lhs2" id="B" value="B" <?php if (isset($_POST['lhs2'])) echo "checked='checked'"; ?>>
	  <label>B</label><br>
	  <input type="checkbox" name="lhs3" id="C" value="C" <?php if (isset($_POST['lhs3'])) echo "checked='checked'"; ?>>
	  <label>C</label><br>
	</td>
	<td>
	  <input type="checkbox" name="rhs1" id="A" value="A" <?php if (isset($_POST['rhs1'])) echo "checked='checked'"; ?>>
	  <label>A</label><br>
	  <input type="checkbox" name="rhs2" id="B" value="B" <?php if (isset($_POST['rhs2'])) echo "checked='checked'"; ?>>
	  <label>B</label><br>
	  <input type="checkbox" name="rhs3" id="C" value="C" <?php if (isset($_POST['rhs3'])) echo "checked='checked'"; ?>>
	  <label>C</label><br>
	</td>
        <td><input type="text" name="obs" style="" value="<?php if (isset($_POST['obs'])) echo $_POST['obs']; ?>"></td>
      </tr>

    </table>

      <label for="pnum">Problem Number:</label>
      <input type="text" id="pnum" name="pnum" value="<?php if (isset($_POST['pnum'])) echo $_POST['pnum']; ?>"><br><br>
      
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
      ?>
   </p>

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
   $sql = "INSERT INTO `Teacher` (`pnum`, `obs`, `fd`, `choice`, `Tuples1`, `Tuples2`, `Tuples3`, `Lhs1`, `Lhs2`, `Lhs3`, `Rhs1`, `Rhs2`, `Rhs3`) VALUES ('$pnum', '$obs', '$fd', '$choice', '$tuples1', '$tuples2', '$tuples3', '$lhs1', '$lhs2', '$lhs3', '$rhs1', '$rhs2', '$rhs3')";
   $rs = mysqli_query($conn, $sql);
   ?>
}
</script>

<a href="index.php" class="btn btn-primary">Student View</a>

  </body>
</html>
