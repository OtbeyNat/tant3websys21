<!-- Insecure login form -->

<!DOCTYPE html>

<html>
<head>
  <title>Login | Lab 8</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="main">
<div id=header>
  <h1>Web Systems Development Course Material</h1>
  <h2>ITWS-2110 | Fall 2021</h2>
</div>
</br></br>
<img class="langimg" src="lang.jpg" alt="languages">  

<p>You must be a student of this course in order to view content</p>
  <form id="logform" action="db.php" method="post">
  <div id="logcontent">
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
      <label for="username">Enter Username</label></br><input type="text" name="username"><br />
      <label for="password">Enter Password</label></br><input type="password" name="password"><br /><br />
      <button type="submit">Login</button>
  </div>  
  </form>
    </br>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>
</html>
