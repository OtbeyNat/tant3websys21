
<?php 
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>


<!DOCTYPE html>
<html>
<head>
  <title>HOME | Lab 8</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
<div id="leftnav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
</div>
<div id=main>
<span style="font-size:30px;cursor:pointer;float:left" onclick="openNav()">&#9776;</span>
<div id=header>
  <h1>Web Systems Development Course Material</h1>
  <h2>ITWS-2110 Fall 2021</h2>
</div>

<h2>Hello, <?php echo $_SESSION['name']; ?>!</h2>
<div id="func">
  <form id="db" action="" method="post">
    <button class="button" type="submit" name="archive">Archive</button>
    <button class="button" type="submit" name="delete">Delete</button>
  </form>
  <button class="button" type="button" onclick="refresh()">Refresh</button>
  <a href="logout.php">LogOut</a>
  </br></br>
</div>  
  </br>
  <div id="preview"><h3>Select a specific content in navigation to view the information here</h3></div>
  <div class="blurb">
  <p>Course Material for Rensselaer Polytechnic Institute's Web Systems Development</p>
  <p>The following contains details on the lectures and labs that serve as the foundation for learning and studying the methods used to extract and deliver information on the World Wide Web.</p>
</div>
<img class="langimg" src="lang.jpg" alt="languages">
<div id="all"></div>
  </div>  


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>
</html>

<?php 

} else {
  header("Location: login.php");
  exit();
}

if (isset($_POST['archive']) || isset($_POST['delete'])) {
  $conn = new PDO('mysql:host=localhost;dbname=login','root','');
  if (!$conn) {
      echo "Connection failed!";
  }
  if (isset($_POST['archive'])) {
    $sql = "CREATE TABLE IF NOT EXISTS `lectures` (
      `title` varchar(255) NOT NULL,
      `description` varchar(255) NOT NULL,
      `link` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    $query = $conn->prepare($sql);
    $query->execute();

    $sql = "CREATE TABLE IF NOT EXISTS `labs` (
      `title` varchar(255) NOT NULL,
      `description` varchar(255) NOT NULL,
      `link` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    $query = $conn->prepare($sql);
    $query->execute();

    $jdata = file_get_contents('websys.json');
    $data = json_decode($jdata, true);

    foreach($data['websys_course']['lectures'] as $col => $val) {
      $title = $val['title'];
      $desc = $val['description'];
      $link = $val['link'];

      $sql = "INSERT INTO `lectures` VALUES ('" . $title . "','" . $desc . "','" . $link . "');";
      $query = $conn->prepare($sql);
      $query->execute();
    }
    foreach($data['websys_course']['Labs'] as $col => $val) {
      $title = $val['title'];
      $desc = $val['description'];
      $link = $val['link'];

      $sql = "INSERT INTO `labs` (title, `description`, link) VALUES ('" . $title . "','" . $desc . "','" . $link . "');";
      $query = $conn->prepare($sql);
      $query->execute();
      
    }    
  }
  else {
    $sql = "DROP TABLE IF EXISTS `lectures`,`labs`;";
    $query = $conn->prepare($sql);
    $query->execute();
  }
}
?>

