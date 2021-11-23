<?php

try {
    $dbconn = new PDO('mysql:host=localhost;dbname=websys_quiz','root','safepassword');
    //echo "connected \n";
} catch (PDOException $e ) {
    echo 'PDO exception thresn: '.$e->getMessage();
}
$err = Array();

try {

    if(isset($_POST["address"])) {
        $query = "ALTER TABLE students ADD street VARCHAR(50) NOT NULL;
        ALTER TABLE students ADD city VARCHAR(50) NOT NULL;
        ALTER TABLE students ADD state VARCHAR(50) NOT NULL;
        ALTER TABLE students ADD zip INT(5) NOT NULL;";
        $dbconn->query($query);
    }

    if(isset($_POST["sec_year"])) {
        $query = "ALTER TABLE courses ADD section CHAR(50) NOT NULL;
        ALTER TABLE courses ADD year INT(4) NOT NULL;";
        $dbconn->query($query);
    }

    if(isset($_POST["course"])) {
        $crn = $_REQUEST["crn"];
        $prefix = $_REQUEST["prefix"];
        $number = $_REQUEST["number"];
        $title = $_REQUEST["title"];
        $sec = $_REQUEST["sec"];
        $year = $_REQUEST["year"];
        $sql = "INSERT INTO courses (`crn`,`prefix`,`number`,`title`,`section`,`year`) VALUES ('$crn','$prefix','$number','$title','$sec','$year')";
        $query = $dbconn->query($sql);

    }

    if(isset($_POST["student"])) {
      $RIN = $_REQUEST["RIN"];
      $rcs = $_REQUEST["rcs"];
      $first = $_REQUEST["first"];
      $last = $_REQUEST["last"];
      $alias = $_REQUEST["alias"];
      $phone = $_REQUEST["phone"];
      $street = $_REQUEST["street"];
      $city = $_REQUEST["city"];
      $state = $_REQUEST["state"];
      $zip = $_REQUEST["zip"];
      $sql = "INSERT INTO `students` (`RIN`, `RCSID`, `firstname`, `lastname`, `alias`, `phone`) VALUES ('$RIN','$rcs','$first','$last','$alias','$phone')";
      $query = $dbconn->query($sql);

  }

  if (isset($_POST["addgrade"])) {
    $crn = $_REQUEST["gcrn"];
    $RIN = $_REQUEST["grin"];
    $grade = $_REQUEST["grade"];
    $sql = "INSERT INTO `grades` (`id`, `crn`, `RIN`, `grade`) VALUES (NULL, '$crn','$RIN','$grade')";
    $query = $dbconn->query($sql);
  }
}

catch (Exception $e) {
  $err[] = $e->getMessage();
}



?>

<!DOCTYPE html>
<html>
<head>
<title>Quiz 2</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="main">
  <div id="header">
    <h1>Item Listings</h1>
  </div>


<?php
?>
  
  <form method="post" action="quiz.php" id="logform">
  
    <label>Order By:
    <input type="submit" name="before" value="Before Discount"/> 
    <input type="submit" name="after" value="After Discount"/> 
    <input type="submit" name="avg" value="Average of Discounts">
    </label>
  
  </form>

  </br>
  <br>

  <div id="result">
  <?php 
    if(isset($_POST["before"])) {  
      $sql = "SELECT name,price FROM `items` ORDER BY price ASC";
      $query = $dbconn->query($sql);
      $res = $query->fetchAll();
      echo "Before Discounts: <br>";
      foreach ($res as $row){
        echo "" . $row["name"]. ": $" . round($row["price"],2) . "</br>";
      }
  
    }

    if(isset($_POST["after"])) {
      $sql = "SELECT name, price * (1-discount) AS VALUE FROM items,discounts WHERE items.id = discounts.item_id ORDER BY price ASC";
      $query = $dbconn->query($sql);
      $res = $query->fetchAll();
      echo "After Discounts: <br>";
      foreach ($res as $row){
        echo "" . $row["name"]. ": $" . round($row["VALUE"],2) . "</br>";
      }
      $sql = "SELECT name, price FROM items WHERE id = 4";
      $query = $dbconn->query($sql);
      $res = $query->fetchAll();
      foreach ($res as $row){
        echo "" . $row["name"]. ": $" . round($row["price"],2) . "</br>";
      }
    }
  
    if(isset($_POST["avg"])) {
      $sql = "SELECT avg(price * (1-discount)) AS VALUE FROM items,discounts WHERE items.id = discounts.item_id ORDER BY price ASC";
      $query = $dbconn->query($sql);
      $res = $query->fetchAll();
      foreach ($res as $row){
        echo "The Average for all of the discounted items is $" . round($row["VALUE"],2) . "</br>";
      }
    }
  /*
    if(isset($_POST["ofname"])) {
      $sql = "SELECT * FROM `students` ORDER BY firstname ASC";
      $query = $dbconn->query($sql);
      $res = $query->fetchAll();
      foreach ($res as $row){
        echo "RIN:" . $row["RIN"] . ", " . "RCSID: ". $row["RCSID"] . ", " . $row["lastname"] . ", ". $row["firstname"] . "</br>";
      }
    }
   */
  ?>
  </div>

  </br>

  <div id="average">
  <?php 
    /*
    if(isset($_POST["avg"])) {
      $sql = "SELECT crn, avg(grade) from grades GROUP BY crn";
      $query = $dbconn->query($sql);
      $res = $query->fetchAll();
      foreach ($res as $row){
        echo "Class CRN: " . $row["crn"] . ", Average: " . $row["avg(grade)"] . "</br>";
      }
    }

    if(isset($_POST["ninety"])) {
      $sql = "SELECT RIN, firstname, lastname, street, `state`, city, zip FROM students where RIN in (SELECT RIN from grades where grade > 90)";
      $query = $dbconn->query($sql);
      $result = $query->fetchAll();
      echo "Students with a Grade Above 90: </br>";
      foreach($result as $res) {
      echo "RIN:" . $res["RIN"] . ", " . $res["lastname"] . ", ". $res["firstname"] . ", ". $res["street"] . ", ". $res["city"] . ", ". $res["state"] . " ". $res["zip"] ."</br>";
      }
    }

    if(isset($_POST["stucount"])) {
      $sql = "SELECT DISTINCT crn, count(DISTINCT RIN) from grades GROUP by crn";
      $query = $dbconn->query($sql);
      $result = $query->fetchAll();
      echo "Number of Students in Each Course:</br>";
      foreach($result as $res) {
      echo "RIN:" . $res["crn"] . ", " . $res["count(DISTINCT RIN)"] . "</br>";
      }
    }
  */
  ?>
  </div>

</div>

</body>
</html>