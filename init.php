<?PHP
  session_start();
  try {
    $db = new PDO('mysql:host=localhost;dbname=stream;charset=utf8mb4', 'root', '');
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
?>
