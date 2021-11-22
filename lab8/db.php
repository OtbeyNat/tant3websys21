<?php 
session_start(); 

$dbhost= "localhost";
$dbusername= "root";
$dbpassword = "root";
$dbname = "login";

$conn = new PDO('mysql:host=localhost;dbname=login','root','');
if (!$conn) {
    echo "Connection failed!";
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: login.php?error=User Name is required");
        exit();
    } else if(empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
        $query = $conn->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        if ($query->rowCount() == 1) {
            foreach($result as $row){
            if ($row['username'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.php");
                exit();
            } else {
                header("Location: login.php?error=Incorect credentials");
                exit();
            }
            }
        } 
        else {
            header("Location: login.php?error=Incorect credentials");
            exit();
    }
  }
} else {
  header("Location: index.php");
  exit();
}
?>
