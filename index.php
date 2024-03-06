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
    <table class="table col-8">
      <tr>
        <th>Functional Dependency</th>
        <th>True</th>
        <th>False</th>
        <th>Tuples</th>
        <th>LHS Columns</th>
	<th>RHS Columns</th>
        <th>Observation</th>
        <th>Active</th>
      </tr>
      <tr>
        <td>AB -> C</td>
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
	<td><input type="radio" name="active" value="1"></td>
      </tr>
      <tr>
        <td>B -> A</td>
        <td><input type="radio" name="truefalse2" value="true"></td>
        <td><input type="radio" name="truefalse2" value="false"></td>
	<td > <!-- may need to include btn-group-toggle -->
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
	</td>
	<!-- td>
	  <input type="checkbox" name="tuples" id="A" value="A">
	  <label for="A">A</label><br>
	  <input type="checkbox" name="tuples" id="B" value="B">
	  <label for="B">B</label><br>
	  <input type="checkbox" name="tuples" id="C" value="C">
	  <label for="C">C</label><br>
	</td-->
	<td>
	  <input type="checkbox" name="tuples" id="A" value="A">
	  <label for="A">A</label><br>
	  <input type="checkbox" name="tuples" id="B" value="B">
	  <label for="B">B</label><br>
	  <input type="checkbox" name="tuples" id="C" value="C">
	  <label for="C">C</label><br>
	</td>
        <td><input type="text" style=""></td>
	<td><input type="radio" name="active" value="1"></td>
      </tr>

    </table>

    </table>

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
      </tr>
    </table>
  </body>
</html>
