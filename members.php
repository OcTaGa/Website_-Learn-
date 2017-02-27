<?PHP require_once "init.php" ?>
<!DOCTYPE HTML>
<?PHP include_once "header.php" ?>

<html>
  <head><link rel="stylesheet" href="style.css" /></head>
  <?PHP
    $stmt = $db->prepare('SELECT * FROM user');
    $stmt->execute();
    $rows = $stmt->fetchAll();
  ?>
  <body>
  <header>
    <div id=titre_page><h2><strong> [<?php echo sizeof($rows) ?>] MEMBERS </strong></h2></div>
  </header>
  <table border=1>
    <thead>
    </thead>
    <tbody>
    <?php
      foreach ($rows as $row) {
        echo "<div>";
        echo "<tr><td id=nameEnt>", $row['name'], '</td><td id=mailEnt>  ', $row['email'], "</tr>";
        echo "</div>";
      }
    ?>
  </tbody>
  </table>
  </body>
</html>
