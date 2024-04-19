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

  $index = 'C2'; /* update this on the go */
  $values = array(
	  ':index' => $index;
  );

  $query = "SELECT :index FROM Problems ORDER BY RAND() LIMIT 1";
  

  try{
    $stmt = $pdo->prepare($query);
    $stmt -> execute($values);
  } catch(PDOException $e) {
	  echo 'Query error '. $e->getMessage();
	  die();
  }

  $out = $stmt -> fetch();
  printf("<div>%d</div>", $out);
