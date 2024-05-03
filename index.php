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
         var problem;

			function getRandomInt(min, max) {
			    min = Math.ceil(min);
			    max = Math.floor(max);
			    return Math.floor(Math.random() * (max - min + 1)) + min;
			} // from MDN
			/*
			window.addEventListener("load", () => {
				fetch("recordsQuery.php", { method: "POST" })
					.then(res => res.json())
					.then(res => {
					    numRecords = res;
					})
					.then(() => {
					problem = getRandomInt(1, numRecords); // me when I 1-index
					//getProblem(problem);
               //createTable(problem);
					});
			//	fetch("problemQuery.php", { method: "POST" })
			//		.then(res => res.text())
			//		.then(txt => document.getElementById("problem-stmt").innerHTML = txt);

			});
         */
         


         /*
			function getProblem(pid){
				const xmlhttp = new XMLHttpRequest();
				console.log(pid);
				xmlhttp.onload = function() {
					document.getElementById("problem-stmt").innerHTML = this.responseText;
				}
				xmlhttp.open("GET", "./getproblem.php?p=" + pid);
				xmlhttp.send();
			}


         function createTable(pid){
            const xmlhttp = new XMLHttpRequest();
				console.log(pid);
				xmlhttp.onload = function() {
					document.getElementById("myTable").innerHTML = this.responseText;
				}
				xmlhttp.open("GET", "./getdependency.php?p=" + pid);
				xmlhttp.send();
         }
         */

         function checkAnswer(){
            <?php
            $i = 0;
            if(isset($_POST['obs'])){
            while(isset($_POST['obs'])){
               echo "alert('Obs not correct')";
               $obs = $_POST["obs_$i"];
               $fd = $_POST["fd_$i"];
               $tuples1 = $_POST["tuples1_$i"];
               $tuples2 = $_POST["tuples2_$i"];
               $tuples3 = $_POST["tuples3_$i"];
               $lhs1 = $_POST["lhs1_$i"];
               $lhs2 = $_POST["lhs2_$i"];
               $lhs3 = $_POST["lhs3_$i"];
               $lhs4 = $_POST["lhs4_$i"];
               $lhs5 = $_POST["lhs5_$i"];
               $rhs1 = $_POST["rhs1_$i"];
               $rhs2 = $_POST["rhs2_$i"];
               $rhs3 = $_POST["rhs3_$i"];
               $rhs4 = $_POST["rhs4_$i"];
               $rhs5 = $_POST["rhs5_$i"];
               if($_POST["truefalse_$i"] == 'true'){
                  $choice = 1;
               }else{
                  $choice = 0;
               }
               
               $sql = "SELECT * FROM `Teacher` WHERE fd = '$fd'";
               $temp = mysqli_query($con, $sql);
               $row = mysqli_fetch_assoc($temp);
               if($row['obs'] = $obs){
                  echo "alert('Obs not correct')";
               }

               $i = $i + 1;
            }
         }else{
            echo "alert('Unable to check against answer in the database!')";
         }
            
            ?>
         }
         
    </script>




  </head>
  <body>


  <form method="POST">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "NoDD";
         
            $con = mysqli_connect($servername, $username, $password, $dbname);

          $query = "SELECT * FROM Problem";
          $result = mysqli_query($con, $query);
          if ($result) :
        ?>
        <p>Please select the problem that you want to answer:</p>
        <select id="problem_id" name="problem_id">
          <?php
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<option value="', $row['problem_id'], '">', "Problem " . $row['problem_id'], '</option>'; 
            }
          ?>
        </select>
        <?php endif ?>
      </p>
      <p>
        <input type="submit" value="Submit my choice"/>
      </p>
    </form>


    <?php if(isset($_POST['problem_id'])) : ?>
      <?php
        $query = "SELECT * FROM Problem WHERE problem_id = " . $_POST['problem_id'];
        $result = mysqli_query($con, $query);
        if ($result) :
      ?>
        <table class="table table-bordered table-sm col-md-2">
          <?php
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td><b>Problem ', $row['problem_id'],'</b></td><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td></tr>
              <tr><td>t<sub>1</sub></td><td>a<sub>', $row['A1'],'</sub></td><td>b<sub>', $row['B1'],'</sub></td><td>c<sub>', $row['C1'],'</sub></td><td>d<sub>', $row['D1'],'</sub></td><td>e<sub>', $row['E1'],'</sub></td></tr>
              <tr><td>t<sub>2</sub></td><td>a<sub>', $row['A2'],'</sub></td><td>b<sub>', $row['B2'],'</sub></td><td>c<sub>', $row['C2'],'</sub></td><td>d<sub>', $row['D2'],'</sub></td><td>e<sub>', $row['E2'],'</sub></td></tr>
              <tr><td>t<sub>3</sub></td><td>a<sub>', $row['A3'],'</sub></td><td>b<sub>', $row['B3'],'</sub></td><td>c<sub>', $row['C3'],'</sub></td><td>d<sub>', $row['D3'],'</sub></td><td>e<sub>', $row['E3'],'</sub></td>';
              echo '</tr>';
            }
          ?>
        </table>
      <?php endif?>
    <?php endif ?>




    <?php if(isset($_POST['problem_id'])) : ?>
      <?php
        $query = "SELECT * FROM Teacher WHERE pnum = " . $_POST['problem_id'];
        $result = mysqli_query($con, $query);
        if ($result) :
      ?>
      <form method="POST" class="needs-validation" onsubmit="checkAnswer(); return false;">
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
          <?php
          $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td><input type="text" style="" name="fd_', $i, '" value="', $row['fd'],'" required readonly></td>
              <td><input type="radio" name="truefalse_' , $i , '" value="true"></td>
              <td><input type="radio" name="truefalse_' , $i , '" value="false"></td>
              <td><input type="checkbox" name="tuples1_' , $i , '" id="t1" value="t1"> <label>t<sub>1</sub></label><br><input type="checkbox" name="tuples2_' , $i , '" id="t2" value="t2"> <label>t<sub>2</sub></label><br><input type="checkbox" name="tuples3_' , $i , '" id="t3" value="t3"> <label>t<sub>3</sub></label><br></td>
              <td><input type="checkbox" name="lhs1_' , $i , '" id="A" value="A"> <label>A</label> <input type="checkbox" name="lhs2_' , $i , '" id="B" value="B"> <label>B</label><br><input type="checkbox" name="lhs3_' , $i , '" id="C" value="C"> <label>C</label> <input type="checkbox" name="lhs4_' , $i , '" id="D" value="D"> <label>D</label><br><input type="checkbox" name="lhs5_' , $i , '" id="E" value="E"> <label>E</label></td>     
              <td><input type="checkbox" name="rhs1_' , $i , '" id="A" value="A"> <label>A</label> <input type="checkbox" name="rhs2_' , $i , '" id="B" value="B"> <label>B</label><br><input type="checkbox" name="rhs3_' , $i , '" id="C" value="C"> <label>C</label> <input type="checkbox" name="rhs4_' , $i , '" id="D" value="D"> <label>D</label><br><input type="checkbox" name="rhs5_' , $i , '" id="E" value="E"> <label>E</label</td>
              <td><input type="text" style="" name="obs" required></td>
              <td><input type="radio" name="active" value="1"></td>';
              echo '</tr>';
              $i = $i + 1;
            }
          ?>
        </table>
        <button type="submit" class="btn btn-secondary" name="problem">Submit</button><br><br>
         </form>
      <?php endif?>
    <?php endif ?>

  <table class = "table table-bordered table-sm col-md-2" id="problem-stmt">
      <!-- js puts things here LOL -->
    </table>


   



    

    <a href="teacher.php" class="btn btn-primary">Teacher view</a>




  </body>
</html>
