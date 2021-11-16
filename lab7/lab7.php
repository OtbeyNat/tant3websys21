<?php

try {
    $dbconn = new PDO('mysql:host=localhost;dbname=websyslab7','root','@Night69+');
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
<title>Lab 7 Gradebook</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<h1>Lab 7</h1>

<?php

$sql = "SELECT * FROM students";
$query = $dbconn->query($sql);
$result = $query->fetchAll();
echo "Students: </br>";
foreach($result as $res) {
echo "RIN:" . $res["RIN"] . ", " . $res["lastname"] . ", ". $res["firstname"] . ", ". $res["RCSID"] . $res["street"]. ", ". $res["alias"]. ", ". $res["phone"] . ", ". $res["city"] . ", ". $res["state"] . " ". $res["zip"] ."</br>";
}
echo "</br>";

$sql = "SELECT * FROM courses";
$query = $dbconn->query($sql);
$result = $query->fetchAll();
echo "Courses: </br>";
foreach($result as $res) {
echo "CRN:" . $res["crn"] . ", " . $res["prefix"] . "-". $res["number"] . ", ". $res["title"] ."</br>";
}
echo "</br>";

$sql = "SELECT * FROM grades";
$query = $dbconn->query($sql);
$result = $query->fetchAll();
echo "Grades: </br>";
foreach($result as $res) {
echo "CRN:" . $res["crn"] . ", RIN: ". $res["RIN"] . ", GradeL". $res["grade"] . "</br>";
}
echo "</br>";


?>
  
  <form method="post" action="lab7.php" id="address">
  <input type="submit" name="address" value="Add Address Field "/>
  <input type="submit" name="sec_year" value="Add Section and Year Fields "/>  
  <br/><br/>
  <input type="submit" name="ninety" value="Students Above 90">
  <input type="submit" name="avg" value="Class Average">
  <input type="submit" name="stucount" value="Students Per Course">
  
</br>
<input type="submit" name="student" value="Add Student"/>  
<input type="number" name="RIN"  value="" placeholder="rin" maxlength="9"/>
<input type="text" name="rcs" value="" placeholder="rcsid" maxlength="50"/>
<input type="text" name="first"  value="" placeholder="first name" maxlength="50"/>
<input type="text" name="last"  value="" placeholder="last name" maxlength="50"/>
<input type="text" name="alias"  value="" placeholder="alias" maxlength="50"/>
<input type="number" name="phone"  value="" placeholder="phone" maxlength="50"/>
<br>
  <input type="text" name="street"  value="" placeholder="street" maxlength="50"/>
    <input type="text" name="city" id="city" value="" placeholder="city" maxlength="50"/>
    <input type="text" name="state" id="state" value="" placeholder="state" maxlength="50"/>
    <input type="number" name="zip" id="zip" value="" placeholder="zip" maxlength="5"/>
    
    <br/><br/>
    <input type="submit" name="course" value="Add Course "/>  
    <input type="number" name="crn" id="crn" value="" placeholder="crn" maxlength="5"/>
    <input type="text" name="prefix" id="prefix" value="" placeholder="prefix" maxlength="50"/>
    <input type="number" name="number" id="number" value="" placeholder="number" maxlength="50"/>
    <input type="text" name="title" id="title" value="" placeholder="title" maxlength="5"/>
    <input type="text" name="sec" id="sec" value="" placeholder="section" maxlength="50"/>
    <input type="number" name="year" id="year" value="" placeholder="year" maxlength="4"/>
      
    <br/><br/>
    <input type="submit" name="addgrade" value="Add Grade "/>  
    <input type="number" name="gcrn" value="" placeholder="crn" maxlength="5"/>
    <input type="text" name="grin" value="" placeholder="rin" maxlength="9"/>
    <input type="number" name="grade" value="" placeholder="grade" maxlength="3"/>
    <br/><br/>
    <label>Order By:
    <input type="submit" name="orin" value="RIN"/> 
    <input type="submit" name="olname" value="Last Name"/> 
    <input type="submit" name="orcs" value="RCSID"/> 
    <input type="submit" name="ofname" value="First Name"/> 
    </label>
  
  </form>

  </br>

  <div id="order">
  <?php 
    if(isset($_POST["orin"])) {  
      $sql = "SELECT * FROM `students` ORDER BY RIN ASC";
      $query = $dbconn->query($sql);
      $res = $query->fetchAll();
      foreach ($res as $row){
        echo "RIN:" . $row["RIN"] . ", " . "RCSID: ". $row["RCSID"] . ", " . $row["firstname"] . ", " . $row["lastname"] . "</br>";
      }
  
    }

    if(isset($_POST["olname"])) {
      $sql = "SELECT * FROM `students` ORDER BY lastname ASC";
      $query = $dbconn->query($sql);
      $res = $query->fetchAll();
      foreach ($res as $row){
        echo "RIN:" . $row["RIN"] . ", " . "RCSID: ". $row["RCSID"] . ", " . $row["firstname"] . ", " . $row["lastname"] . "</br>";
      }
    }
  
    if(isset($_POST["orcs"])) {
      $sql = "SELECT * FROM `students` ORDER BY RCSID ASC";
      $query = $dbconn->query($sql);
      $res = $query->fetchAll();
      foreach ($res as $row){
        echo "RIN:" . $row["RIN"] . ", " . "RCSID: ". $row["RCSID"] . ", " . $row["firstname"] . ", " . $row["lastname"] . "</br>";
      }
    }
  
    if(isset($_POST["ofname"])) {
      $sql = "SELECT * FROM `students` ORDER BY firstname ASC";
      $query = $dbconn->query($sql);
      $res = $query->fetchAll();
      foreach ($res as $row){
        echo "RIN:" . $row["RIN"] . ", " . "RCSID: ". $row["RCSID"] . ", " . $row["lastname"] . ", ". $row["firstname"] . "</br>";
      }
    }
   
  ?>
  </div>

  </br>

  <div id="average">
  <?php 
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
  
  ?>
  </div>

</div>

</body>
</html>