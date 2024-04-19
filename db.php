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

  $index = 'C2';

  try{
    $stmt = $pdo->prepare("SELECT " . $index . " FROM Problems ORDER BY RAND() LIMIT 1");
    $stmt -> execute($values);
  } catch(PDOException $e) {
	  echo 'Query error '. $e->getMessage();
	  die();
  }

  $out = $stmt -> fetchAll();
  foreach($out as $o){
	  printf("<div> %d </div>", $o['C2']);
  }
