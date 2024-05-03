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

    <table class = "table table-bordered table-sm col-sm-3">
      <tr> 
         <td></td>
         <td>A</td>
         <td>B</td>
         <td>C</td>
         <td>D</td>
         <td>E</td>
      </tr>
      <tr>
         <td>t<sub>1</sub></td>
         <td>
            <select name="a1" class="form-control form-control-sm">
               <option value="1">a&#x2081</option>
               <option value="2">a&#x2082</option>
               <option value="3">a&#x2083</option>
            </select>
         </td>
         <td>
            <select name="b1" class="form-control form-control-sm">
               <option value="1">b&#x2081</option>
               <option value="2">b&#x2082</option>
               <option value="3">b&#x2083</option>
            </select>
         </td>
         <td>
            <select name="c1" class="form-control form-control-sm">
               <option value="1">c&#x2081</option>
               <option value="2">c&#x2082</option>
               <option value="3">c&#x2083</option>
            </select>
         </td>
         <td>
            <select name="d1" class="form-control form-control-sm">
               <option value="1">d&#x2081</option>
               <option value="2">d&#x2082</option>
               <option value="3">d&#x2083</option>
            </select>
         </td>
         <td>
            <select name="e1" class="form-control form-control-sm">
               <option value="1">e&#x2081</option>
               <option value="2">e&#x2082</option>
               <option value="3">e&#x2083</option>
            </select>
         </td>
      </tr>
      <tr>
         <td>t<sub>2</sub></td>
         <td>
            <select name="a2" class="form-control form-control-sm">
               <option value="1">a&#x2081</option>
               <option value="2">a&#x2082</option>
               <option value="3">a&#x2083</option>
            </select>
         </td>
         <td>
            <select name="b2" class="form-control form-control-sm">
               <option value="1">b&#x2081</option>
               <option value="2">b&#x2082</option>
               <option value="3">b&#x2083</option>
            </select>
         </td>
         <td>
            <select name="c2" class="form-control form-control-sm">
               <option value="1">c&#x2081</option>
               <option value="2">c&#x2082</option>
               <option value="3">c&#x2083</option>
            </select>
         </td>
         <td>
            <select name="d2" class="form-control form-control-sm">
               <option value="1">d&#x2081</option>
               <option value="2">d&#x2082</option>
               <option value="3">d&#x2083</option>
            </select>
         </td>
         <td>
            <select name="e2" class="form-control form-control-sm">
               <option value="1">e&#x2081</option>
               <option value="2">e&#x2082</option>
               <option value="3">e&#x2083</option>
            </select>
         </td>
      </tr>
      <tr>
         <td>t<sub>3</sub></td>
         <td>
            <select name="a3" class="form-control form-control-sm">
               <option value="1">a&#x2081</option>
               <option value="2">a&#x2082</option>
               <option value="3">a&#x2083</option>
            </select>
         </td>
         <td>
            <select name="b3" class="form-control form-control-sm">
               <option value="1">b&#x2081</option>
               <option value="2">b&#x2082</option>
               <option value="3">b&#x2083</option>
            </select>
         </td>
         <td>
            <select name="c3" class="form-control form-control-sm">
               <option value="1">c&#x2081</option>
               <option value="2">c&#x2082</option>
               <option value="3">c&#x2083</option>
            </select>
         </td>
         <td>
            <select name="d3" class="form-control form-control-sm">
               <option value="1">d&#x2081</option>
               <option value="2">d&#x2082</option>
               <option value="3">d&#x2083</option>
            </select>
         </td>
         <td>
            <select name="e3" class="form-control form-control-sm">
               <option value="1">e&#x2081</option>
               <option value="2">e&#x2082</option>
               <option value="3">e&#x2083</option>
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
	  <label>A</label>
	  <input type="checkbox" name="lhs2_0" id="B" value="B">
	  <label>B</label><br>
	  <input type="checkbox" name="lhs3_0" id="C" value="C">
	  <label>C</label>
     <input type="checkbox" name="lhs4_0" id="D" value="D">
	  <label>D</label><br>
     <input type="checkbox" name="lhs5_0" id="E" value="E">
	  <label>E</label>
	</td>
	<td>
	  <input type="checkbox" name="rhs1_0" id="A" value="A">
	  <label>A</label>
	  <input type="checkbox" name="rhs2_0" id="B" value="B">
	  <label>B</label><br>
	  <input type="checkbox" name="rhs3_0" id="C" value="C">
	  <label>C</label>
     <input type="checkbox" name="rhs4_0" id="D" value="D">
	  <label>D</label><br>
	  <input type="checkbox" name="rhs5_0" id="E" value="E">
	  <label>E</label>
     
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
  cell5.innerHTML = '<td><input type="checkbox" name="lhs1_' + i + '" id="A" value="A"> <label>A</label> <input type="checkbox" name="lhs2_' + i + '" id="B" value="B"> <label>B</label><br><input type="checkbox" name="lhs3_' + i + '" id="C" value="C"> <label>C</label> <input type="checkbox" name="lhs4_' + i + '" id="D" value="D"> <label>D</label><br><input type="checkbox" name="lhs5_' + i + '" id="E" value="E"> <label>E</label></td>';
  cell6.innerHTML = '<td><input type="checkbox" name="rhs1_' + i + '" id="A" value="A"> <label>A</label> <input type="checkbox" name="rhs2_' + i + '" id="B" value="B"> <label>B</label><br><input type="checkbox" name="rhs3_' + i + '" id="C" value="C"> <label>C</label> <input type="checkbox" name="rhs4_' + i + '" id="D" value="D"> <label>D</label><br><input type="checkbox" name="rhs5_' + i + '" id="E" value="E"> <label>E</label</td>';
  cell7.innerHTML = '<td><input type="text" style="" name="obs_' + i + '" required></td>';
  i++;
}

function myDeleteFunction(){
  document.getElementById("myTable").deleteRow(-1);
  i--;
}

/*-------SQL to create both of the tables needed
CREATE TABLE `NoDD`.`Teacher` (`pnum` INT NOT NULL , `obs` VARCHAR(255) NOT NULL , `fd` VARCHAR(255) NOT NULL , `choice` INT NOT NULL , `tuples1` VARCHAR(5) NOT NULL , `tuples2` VARCHAR(5) NOT NULL , `tuples3` VARCHAR(5) NOT NULL , `lhs1` VARCHAR(5) NOT NULL , `lhs2` VARCHAR(5) NOT NULL , `lhs3` VARCHAR(5) NOT NULL , `lhs4` VARCHAR(5) NOT NULL , `lhs5` VARCHAR(5) NOT NULL , `rhs1` VARCHAR(5) NOT NULL , `rhs2` VARCHAR(5) NOT NULL , `rhs3` VARCHAR(5) NOT NULL , `rhs4` VARCHAR(5) NOT NULL , `rhs5` VARCHAR(5) NOT NULL ) ENGINE = InnoDB;
CREATE TABLE `NoDD`.`Problems` (`problem_id` INT(11) NOT NULL , `A1` INT(11) NOT NULL , `A2` INT(11) NOT NULL , `A3` INT(11) NOT NULL , `B1` INT(11) NOT NULL , `B2` INT(11) NOT NULL , `B3` INT(11) NOT NULL , `C1` INT(11) NOT NULL , `C2` INT(11) NOT NULL , `C3` INT(11) NOT NULL , `D1` INT(11) NOT NULL , `D2` INT(11) NOT NULL , `D3` INT(11) NOT NULL , `E1` INT(11) NOT NULL , `E2` INT(11) NOT NULL , `E3` INT(11) NOT NULL ) ENGINE = InnoDB;
ALTER TABLE `Problems` ADD PRIMARY KEY(`problem_id`);
*/
</script>

  </body>
</html>
