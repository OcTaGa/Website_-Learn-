

<?PHP
require_once "init.php";
?>

<HTML>
  <?PHP
if (isset($_POST['connect']))
{
  $stmt = $db->prepare("SELECT * FROM user WHERE name=? AND passwd=?");
  $stmt->execute(array($_POST['pseudo'], hash('sha256', $_POST['password'])));
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (sizeof($rows) > 0)
  {
    $_SESSION['pseudo'] = $_POST['pseudo'];
    echo "You're connected as " . $_POST['pseudo'];
  }
  else {
    unset($_SESSION['pseudo']);
    unset($_POST['pseudo']);
    echo "wrong username or password.";
  }
}

if (isset($_POST['unregister']) && isset($_SESSION['pseudo']))
{
  $stmt = $db->prepare("DELETE FROM user WHERE name=?");
  $stmt->execute(Array($_SESSION['pseudo']));
  echo "Your account has been deleted.";
  unset($_SESSION['pseudo']);
}

if (isset($_POST['deconnect']))
{
  unset($_SESSION['pseudo']);
  unset($_POST['pseudo']);
  echo "Logged out.";
}

if (isset($_POST['register']))
{
  if ($_POST['passwd'] == $_POST['passwd2'])
    addUser($_POST['pseudo'], $_POST['email'], hash('sha256', $_POST['passwd']));
  else
    echo "Passwords mismatch.";
}

?> <p> <a href="index.php"> back to home page </a> </p> <?PHP

function addUser($pseudo, $email, $passwd)
{
  if (strlen($pseudo) < 4)
  {
    echo "username must be at least 4 characters long.";
    return (false);
  }
  if (strlen($passwd) < 6)
  {
    echo "password must be at least 6 characters long.";
    return (false);
  }
  if (isNewUserValid($pseudo, $email) == false)
  {
    echo "username or email already in use.";
    return (false);
  }
  try {
    $db = new PDO('mysql:host=localhost;dbname=stream;charset=utf8mb4', 'root', '');
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
  $stmt = $db->prepare("INSERT INTO user(name, email, passwd) VALUES(?, ?, ?)");
  $stmt->execute(array($pseudo, $email, $passwd));
  $_SESSION['pseudo'] = $pseudo;
  echo "Successfully created your new account. You're now known as " . $_SESSION['pseudo'];
  return (true);
}

function isNewUserValid($pseudo, $email)
{
  try {
    $db = new PDO('mysql:host=localhost;dbname=stream;charset=utf8mb4', 'root', '');
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
  $stmt = $db->prepare("SELECT * from user WHERE name=? OR email=?");
  $stmt->execute(array($pseudo, $email));
  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (sizeof($row) > 0)
    return (false);
  return (true);
}

?>
</HTML>
