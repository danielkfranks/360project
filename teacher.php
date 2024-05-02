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
    

<form method="POST" id="form1" class="needs-validation" action="submit.php">

    <table class = "table table-bordered table-sm col-md-2">
      <tr> 
         <td></td>
         <td>A</td>
         <td>B</td>
         <td>C</td>
      </tr>
      <tr>
         <td>t<sub>1</sub></td>
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
         <td>t<sub>2</sub></td>
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
         <td>t<sub>3</sub></td>
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
      <td><input type="text" style="" name="fd_0" required></td>
        <td><input type="radio" name="truefalse_0" value="true"></td>
        <td><input type="radio" name="truefalse_0" value="false"></td>
	<td>
	  <input type="checkbox" name="tuples1_0" id="t1" value="t1">
	  <label>t<sub>1</sub></label><br>
	  <input type="checkbox" name="tuples2_0" id="t2" value="t2">
	  <label>t<sub>2</sub></label><br>
	  <input type="checkbox" name="tuples3_0" id="t3" value="t3">
	  <label>t<sub>3</sub></label><br>
        </td>
	<td>
	  <input type="checkbox" name="lhs1_0" id="A" value="A">
	  <label>A</label><br>
	  <input type="checkbox" name="lhs2_0" id="B" value="B">
	  <label>B</label><br>
	  <input type="checkbox" name="lhs3_0" id="C" value="C">
	  <label>C</label><br>
	</td>
	<td>
	  <input type="checkbox" name="rhs1_0" id="A" value="A">
	  <label>A</label><br>
	  <input type="checkbox" name="rhs2_0" id="B" value="B">
	  <label>B</label><br>
	  <input type="checkbox" name="rhs3_0" id="C" value="C">
	  <label>C</label><br>
	</td>
        <td><input type="text" name="obs_0" style="" required></td>
      </tr>

    </table>

      <label for="pnum">Problem Number:</label>
      <input type="text" id="pnum" name="pnum" required><br><br>
      
</form>

    <button type="submit" class="btn btn-secondary" form="form1" name="submit">Submit</button>



   <button type="button" class="btn btn-secondary" onclick="myCreateFunction()">Create row</button>
   <button type="button" class="btn btn-secondary" onclick="myDeleteFunction()">Delete row</button>


   <p>
   </p>

   <a href="index.php" class="btn btn-primary">Student View</a>

<script>
   i = 1;
function myCreateFunction(){
  var table = document.getElementById("myTable");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  cell1.innerHTML = '<td><input type="text" style="" name="fd_' + i + '" required></td>';
  cell2.innerHTML = '<td><input type="radio" name="truefalse_' + i + '" value="true"></td>';
  cell3.innerHTML = '<td><input type="radio" name="truefalse_' + i + '" value="false"></td>';
  cell4.innerHTML = '<td><input type="checkbox" name="tuples1_' + i + '" id="t1" value="t1"> <label>t<sub>1</sub></label><br><input type="checkbox" name="tuples2_' + i + '" id="t2" value="t2"> <label>t<sub>2</sub></label><br><input type="checkbox" name="tuples3_' + i + '" id="t3" value="t3"> <label>t<sub>3</sub></label><br></td>';
  cell5.innerHTML = '<td><input type="checkbox" name="lhs1_' + i + '" id="A" value="A"> <label>A</label><br><input type="checkbox" name="lhs2_' + i + '" id="B" value="B"> <label>B</label><br><input type="checkbox" name="lhs3_' + i + '" id="C" value="C"> <label>C</label><br></td>';
  cell6.innerHTML = '<td><input type="checkbox" name="rhs1_' + i + '" id="A" value="A"> <label>A</label><br><input type="checkbox" name="rhs2_' + i + '" id="B" value="B"> <label>B</label><br><input type="checkbox" name="rhs3_' + i + '" id="C" value="C"><label>C</label><br></td>';
  cell7.innerHTML = '<td><input type="text" style="" name="obs_' + i + '" required></td>';
  i++;
}

function myDeleteFunction(){
  document.getElementById("myTable").deleteRow(-1);
  i--;
}

/*
CREATE TABLE `NoDD`.`Teacher` (`pnum` INT NOT NULL , `obs` VARCHAR(255) NOT NULL , `fd` VARCHAR(255) NOT NULL , `choice` INT NOT NULL , `tuples1` VARCHAR(5) NOT NULL , `tuples2` VARCHAR(5) NOT NULL , `tuples3` VARCHAR(5) NOT NULL , `lhs1` VARCHAR(5) NOT NULL , `lhs2` VARCHAR(5) NOT NULL , `lhs3` VARCHAR(5) NOT NULL , `rhs1` VARCHAR(5) NOT NULL , `rhs2` VARCHAR(5) NOT NULL , `rhs3` VARCHAR(5) NOT NULL ) ENGINE = InnoDB;
*/
</script>

  </body>
</html>
