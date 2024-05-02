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
    $stmt = $pdo->prepare("SELECT * FROM Teacher WHERE problem_id = $pid");
    $stmt -> execute($values);
  } catch(PDOException $e) {
	  echo 'Query error '. $e->getMessage();
	  die();
  }

  $out = $stmt -> fetchAll();
  foreach($out as $o){
	  printf(" { \"pnum\": \"%d\", \"obs\": \"%s\", \"fd\": \"%s\", \"choice\":\"%d\", \"tuples1\": \"%s\", \"tuples2\": \"%s\", \"tuples3\": \"%s\", \"lhs1\": \"%s\", \"lhs2\": \"%s\", \"lhs3\": \"%s\", \"rhs1\": \"%s\", \"rhs2\": \"%s\", \"rhs3\": \"%s\"} ", $o['pnum'], $o['obs'], $o['fd'], $o['choice'], $o['tuples1'], $o['tuples2'], $o['tuples3'], $o['lhs1'], $o['lhs2'], $o['lhs3'], $o['rhs1'], $o['rhs2'], $o['rhs3']);
  }
