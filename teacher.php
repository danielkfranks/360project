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
    
    <table class = "table table-bordered table-sm col-md-2">
      <tr> 
         <td></td>
         <td>A</td>
         <td>B</td>
         <td>C</td>
         <td>D</td>
         <td>E</td>
      </tr>
      <tr>
         <td>t_1</td>
         <td>
            <select>
               <option>a_1</option>
               <option>a_2</option>
               <option>a_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>b_1</option>
               <option>b_2</option>
               <option>b_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>c_1</option>
               <option>c_2</option>
               <option>c_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>d_1</option>
               <option>d_2</option>
               <option>d_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>e_1</option>
               <option>e_2</option>
               <option>e_3</option>
            </select>
         </td>
      </tr>
      <tr>
         <td>t_2</td>
         <td>
            <select>
               <option>a_1</option>
               <option>a_2</option>
               <option>a_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>b_1</option>
               <option>b_2</option>
               <option>b_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>c_1</option>
               <option>c_2</option>
               <option>c_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>d_1</option>
               <option>d_2</option>
               <option>d_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>e_1</option>
               <option>e_2</option>
               <option>e_3</option>
            </select>
         </td>
      </tr>
      <tr>
         <td>t_3</td>
         <td>
            <select>
               <option>a_1</option>
               <option>a_2</option>
               <option>a_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>b_1</option>
               <option>b_2</option>
               <option>b_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>c_1</option>
               <option>c_2</option>
               <option>c_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>d_1</option>
               <option>d_2</option>
               <option>d_3</option>
            </select>
         </td>
         <td>
            <select>
               <option>e_1</option>
               <option>e_2</option>
               <option>e_3</option>
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
      <td><input type="text" style=""></td>
        <td><input type="radio" name="truefalse" value="true"></td>
        <td><input type="radio" name="truefalse" value="false"></td>
	<td>
	  <input type="checkbox" name="tuples" id="t1" value="t1">
	  <label for="t1">T1</label><br>
	  <input type="checkbox" name="tuples" id="t2" value="t2">
	  <label for="t2">T2</label><br>
	  <input type="checkbox" name="tuples" id="t3" value="t3">
	  <label for="t3">T3</label><br>
        </td>
	<td>
	  <input type="checkbox" name="tuples" id="A" value="A">
	  <label for="A">A</label><br>
	  <input type="checkbox" name="tuples" id="B" value="B">
	  <label for="B">B</label><br>
	  <input type="checkbox" name="tuples" id="C" value="C">
	  <label for="C">C</label><br>
	</td>
	<td>
	  <input type="checkbox" name="tuples" id="A" value="A">
	  <label for="A">A</label><br>
	  <input type="checkbox" name="tuples" id="B" value="B">
	  <label for="B">B</label><br>
	  <input type="checkbox" name="tuples" id="C" value="C">
	  <label for="C">C</label><br>
	</td>
        <td><input type="text" style=""></td>
      </tr>
      <tr>
      <td><input type="text" style=""></td>
        <td><input type="radio" name="truefalse2" value="true"></td>
	<td><input type="radio" name="truefalse2" value="false"></td>
	<td>
	  <input type="checkbox" name="tuples" id="t1" value="t1">
	  <label for="t1">T1</label><br>
	  <input type="checkbox" name="tuples" id="t2" value="t2">
	  <label for="t2">T2</label><br>
	  <input type="checkbox" name="tuples" id="t3" value="t3">
	  <label for="t3">T3</label><br>
        </td>
	<!-- td > 
	  <div class="btn-group-vertical ">
	    <label  class="btn btn-secondary ">
	      <input type="checkbox" class="btn-check" name="tuples" id="t1" value="t1">T1
	    </label>
	    <label  class="btn btn-secondary">
	      <input type="checkbox" class="btn-check" name="tuples" id="t2" value="t2">T2
	    </label>
	    <label  class="btn btn-secondary">
	      <input type="checkbox" class="btn-check" name="tuples" id="t3" value="t3">T3
	    </label>
	  </div>
	</td>
	<td >
	 <div class="btn-group-vertical">
	   <button type="button" class="btn btn-secondary">button</button> 
	   <button type="button" class="btn btn-secondary">button</button> 
	   <button type="button" class="btn btn-secondary">button</button> 
	  </div>
	</td -->
	<td>
	  <input type="checkbox" name="tuples" id="A" value="A">
	  <label for="A">A</label><br>
	  <input type="checkbox" name="tuples" id="B" value="B">
	  <label for="B">B</label><br>
	  <input type="checkbox" name="tuples" id="C" value="C">
	  <label for="C">C</label><br>
	</td>
	<td>
	  <input type="checkbox" name="tuples" id="A" value="A">
	  <label for="A">A</label><br>
	  <input type="checkbox" name="tuples" id="B" value="B">
	  <label for="B">B</label><br>
	  <input type="checkbox" name="tuples" id="C" value="C">
	  <label for="C">C</label><br>
	</td>
        <td><input type="text" style=""></td>
      </tr>

    </table>

   <input type="button" name="submit" value="Submit" onclick="">



   <button onclick="myCreateFunction()">Create row</button>
   <button onclick="myDeleteFunction()">Delete row</button>

<script>
function myCreateFunction() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  cell1.innerHTML = <input type="text" style="">;
  cell2.innerHTML = "NEW CELL2";
}

function myDeleteFunction() {
  document.getElementById("myTable").deleteRow(-1);
}
</script>



  </body>
</html>
