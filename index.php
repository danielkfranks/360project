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
    <script src=https://cdnjs.cloudflare.com/ajax/libs/mathjs/3.3.0/math.min.js></script>

<script>
			var numRecords;

			function getRandomInt(min, max) {
			    min = Math.ceil(min);
			    max = Math.floor(max);
			    return Math.floor(Math.random() * (max - min + 1)) + min;
			} // from MDN
			
			window.addEventListener("load", () => {
				fetch("recordsQuery.php", { method: "POST" })
					.then(res => res.json())
					.then(res => {
					    numRecords = res;
					})
					.then(() => {
					var problem = getRandomInt(1, numRecords); // me when I 1-index
					getProblem(problem);
					});
			//	fetch("problemQuery.php", { method: "POST" })
			//		.then(res => res.text())
			//		.then(txt => document.getElementById("problem-stmt").innerHTML = txt);

			});



			function getProblem(pid){
				const xmlhttp = new XMLHttpRequest();
				console.log(pid);
				xmlhttp.onload = function() {
					document.getElementById("problem-stmt").innerHTML = this.responseText;
				}
				xmlhttp.open("GET", "./getproblem.php?p=" + pid);
				xmlhttp.send();
			}

			function getSolution(pid){
				const xmlhttp = new XMLHttpRequest();
				console.log(pid);
				xmlhttp.onload = function() {
					document.getElementById("fd_def").innerHTML = this.responseText;
					var mySolution = JSON.parse(this.responseText); // ok hopefully we can play with it now
					document.getElementById("fd_def").innerHTML = mySolution;
				}
				xmlhttp.open("GET", "./getsolution.php?p=" + pid);
				xmlhttp.send();
			}

    </script>
  </head>
  <body>
    <table class="table col-8 table-bordered">
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
        <td id="fd_def"></td>
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
	<td><input type="radio" name="active" value="1"></td>
      </tr>

    </table>

    

    <table class = "table table-bordered table-sm col-md-2" id="problem-stmt">
      <!-- js puts things here LOL -->
    </table>

    <a href="teacher.php" class="btn btn-primary">Teacher view</a>
  </body>
</html>
