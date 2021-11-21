
<?php 
  /*session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
*/
    ?>


<!DOCTYPE html>
<html>
<head>
  <title>HOME</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <h1>Hello, <?//php echo $_SESSION['name']; ?></h1>
  <div id="leftnav">
  </div>
  <span onclick="openNav()">open</span>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>
</html>

<?php 
/*
} else {
  header("Location: login.php");
  exit();
}
*/
?>

