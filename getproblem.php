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
    $stmt = $pdo->prepare("SELECT * FROM Problems WHERE problem_id = $pid");
    $stmt -> execute($values);
  } catch(PDOException $e) {
	  echo 'Query error '. $e->getMessage();
	  die();
  }

  $out = $stmt -> fetchAll();
  foreach($out as $o){
	  printf(" <tr>\n<td></td><td>A</td><td>B</td><td>C</td></tr>\n
<tr><td>1</td><td>%d</td><td>%d</td><td>%d</td></tr>\n
<tr><td>2</td><td>%d</td><td>%d</td><td>%d</td></tr>\n
<tr><td>3</td><td>%d</td><td>%d</td><td>%d</td></tr>\n
<?php\n  $key=%d \n ?>
", $o['A1'], $o['A2'], $o['A3'], $o['B1'], $o['B2'], $o['B3'], $o['C1'], $o['C2'], $o['C3'], $o['problem_id']);
  }
