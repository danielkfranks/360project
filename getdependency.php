<?php
  define("DB_HOST", "localhost");
  define("DB_NAME", "NoDD");
  define("DB_CHARSET", "utf8mb4");
  define("DB_USER", "root");
  define("DB_PASSWORD", "");

  $pdo = new PDO(
	  "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, DB_USER, DB_PASSWORD, [
		  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	  ]
  );

  $pid = $_REQUEST["p"];

  try{
    $stmt = $pdo->prepare("SELECT * FROM Teacher WHERE pnum = $pid");
    $stmt -> execute($values);
  } catch(PDOException $e) {
	  echo 'Query error '. $e->getMessage();
	  die();
  }
  printf('<tr>
   <th>Functional Dependency</th>
   <th>True</th>
   <th>False</th>
   <th>Tuples</th>
   <th>LHS Columns</th>
   <th>RHS Columns</th>
   <th>Observation</th>
   <th>Active</th>
   </tr>');
  $i = 0;
  $out = $stmt -> fetchAll();
  foreach($out as $o){
	  printf(' <tr><td><input type="text" style="" name="fd_' . $i . '" value="%s" required readonly></td>
     <td><input type="radio" name="truefalse_' . $i . '" value="true"></td>
     <td><input type="radio" name="truefalse_' . $i . '" value="false"></td>
     <td><input type="checkbox" name="tuples1_' . $i . '" id="t1" value="t1"> <label>t<sub>1</sub></label><br><input type="checkbox" name="tuples2_' . $i . '" id="t2" value="t2"> <label>t<sub>2</sub></label><br><input type="checkbox" name="tuples3_' . $i . '" id="t3" value="t3"> <label>t<sub>3</sub></label><br></td>
     <td><input type="checkbox" name="lhs1_' . $i . '" id="A" value="A"> <label>A</label> <input type="checkbox" name="lhs2_' . $i . '" id="B" value="B"> <label>B</label><br><input type="checkbox" name="lhs3_' . $i . '" id="C" value="C"> <label>C</label> <input type="checkbox" name="lhs4_' . $i . '" id="D" value="D"> <label>D</label><br><input type="checkbox" name="lhs5_' . $i . '" id="E" value="E"> <label>E</label></td>     
     <td><input type="checkbox" name="rhs1_' . $i . '" id="A" value="A"> <label>A</label> <input type="checkbox" name="rhs2_' . $i . '" id="B" value="B"> <label>B</label><br><input type="checkbox" name="rhs3_' . $i . '" id="C" value="C"> <label>C</label> <input type="checkbox" name="rhs4_' . $i . '" id="D" value="D"> <label>D</label><br><input type="checkbox" name="rhs5_' . $i . '" id="E" value="E"> <label>E</label</td>
     <td><input type="text" style="" name="obs_' . $i . '" required></td>
     <td><input type="radio" name="active" value="1"></td>
     </tr>
', $o['fd'], $o['problem_id']);
$i = $i + 1;
  }
