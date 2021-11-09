<?php 

abstract class Operation {
  protected $operand_1;
  protected $operand_2;
  public function __construct($o1, $o2,$n) {
    // Make sure we're working with numbers...
    if ($n==2) {
      if (!is_numeric($o1) || !is_numeric($o2)) {
        throw new Exception('Non-numeric operand.');
      }
      
      // Assign passed values to member variables
      $this->operand_1 = $o1;
      $this->operand_2 = $o2;
    }
    else {
      if (!is_numeric($o1) && !is_numeric($o2)) {
        throw new Exception('Non-numeric operand.');
      }
      elseif (!is_numeric($o1) && is_numeric($o2)) {
        $this->operand_1 = $o2;
      }
      else {
        $this->operand_1 = $o1;
      }
    }
    
  }
  public abstract function operate();
  public abstract function getEquation(); 
}

class Sqrt extends Operation {
  public function operate() {
    return sqrt($this->operand_1);
  }
  public function getEquation() {
    return 'sqrt(' . $this->operand_1 . ') = ' . $this->operate();
  }
}

class Log10 extends Operation {
  public function operate() {
    return log10($this->operand_1);
  }
  public function getEquation() {
    return 'log10(' . $this->operand_1 . ') = ' . $this->operate();
  }
}

class Ln extends Operation {
  public function operate() {
    return log($this->operand_1);
  }
  public function getEquation() {
    return 'ln(' . $this->operand_1 . ') = ' . $this->operate();
  }
}

class Tenx extends Operation {
  public function operate() {
    return 10 ** $this->operand_1;
  }
  public function getEquation() {
    return '10^' . $this->operand_1 . ' = ' . $this->operate();
  }
}

class Ex extends Operation {
  public function operate() {
    return exp($this->operand_1);
  }
  public function getEquation() {
    return 'e^' . $this->operand_1 . ' = ' . $this->operate();
  }
}

class Sin extends Operation {
  public function operate() {
    return sin($this->operand_1);
  }
  public function getEquation() {
    return 'Sin(' . $this->operand_1 . ') = ' . $this->operate();
  }
}

class Cos extends Operation {
  public function operate() {
    return cos($this->operand_1);
  }
  public function getEquation() {
    return 'Cos(' . $this->operand_1 . ') = ' . $this->operate();
  }
}

class Square extends Operation {
  public function operate() {
    return $this->operand_1 ** 2;
  }
  public function getEquation() {
    return $this->operand_1 . '^2 = ' . $this->operate();
  }
}

class Tan extends Operation {
  public function operate() {
    return tan($this->operand_1);
  }
  public function getEquation() {
    return 'Tan(' . $this->operand_1 . ') = ' . $this->operate();
  }
}

// Addition subclass inherits from Operation
class Addition extends Operation {
  public function operate() {
    return $this->operand_1 + $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' + ' . $this->operand_2 . ' = ' . $this->operate();
  }
}


// Add subclasses for Subtraction, Multiplication and Division here

class Subtraction extends Operation {
  public function operate() {
    return $this->operand_1 - $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' - ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Multiplication extends Operation {
  public function operate() {
    return $this->operand_1 * $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' * ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class Division extends Operation {
  public function operate() {
    return $this->operand_1 / $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' / ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

class XPowerY extends Operation {
  public function operate() {
    return $this->operand_1 ** $this->operand_2;
  }
  public function getEquation() {
    return $this->operand_1 . ' ^ ' . $this->operand_2 . ' = ' . $this->operate();
  }
}

// Some debugs - uncomment these to see what is happening...
// echo '$_POST print_r=>',print_r($_POST);
// echo "<br>",'$_POST vardump=>',var_dump($_POST);
// echo '<br/>$_POST is ', (isset($_POST) ? 'set' : 'NOT set'), "<br/>";
// echo "<br/>---";


// Check to make sure that POST was received 
// upon initial load, the page will be sent back via the initial GET at which time
// the $_POST array will not have values - trying to access it will give undefined message

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $o1 = $_POST['op1'];
    $o2 = $_POST['op2'];
  }
  $err = Array();


// Instantiate an object for each operation based on the values returned on the form
// For example, check to make sure that $_POST is set and then check its value and 
// instantiate its object
// 
// The Add is done below.  Go ahead and finish the remiannig functions.  
// Then tell me if there is a way to do this without the ifs
// We might cover such a way on Tuesday...

  try {
    if (isset($_POST['add']) && $_POST['add'] == '+') {
      $op = new Addition($o1, $o2,2);
    }
    if (isset($_POST['sub']) && $_POST['sub'] == '-') {
      $op = new Subtraction($o1, $o2,2);
    }
    if (isset($_POST['mult']) && $_POST['mult'] == 'X') {
      $op = new Multiplication($o1, $o2,2);
    }
    if (isset($_POST['divi']) && $_POST['divi'] == '/') {
      $op = new Division($o1, $o2,2);
    }
    if (isset($_POST['x^y']) && $_POST['x^y'] == 'x^y') {
      $op = new XPowerY($o1, $o2,2);
    }
    if (isset($_POST['sqrt']) && $_POST['sqrt'] == 'Sqrt') {
      $op = new Sqrt($o1, $o2,1);
    }
    if (isset($_POST['x^2']) && $_POST['x^2'] == 'x^2') {
      $op = new Square($o1, $o2,1);
    }
    if (isset($_POST['log10']) && $_POST['log10'] == 'Log10') {
      $op = new Log10($o1, $o2,1);
    }
    if (isset($_POST['ln']) && $_POST['ln'] == 'Ln') {
      $op = new Ln($o1, $o2,1);
    }
    if (isset($_POST['10^x']) && $_POST['10^x'] == '10^x') {
      $op = new Tenx($o1, $o2,1);
    }
    if (isset($_POST['e^x']) && $_POST['e^x'] == 'e^x') {
      $op = new Ex($o1, $o2,1);
    }
    if (isset($_POST['sin']) && $_POST['sin'] == 'Sin') {
      $op = new Sin($o1, $o2,1);
    }
    if (isset($_POST['cos']) && $_POST['cos'] == 'Cos') {
      $op = new Cos($o1, $o2,1);
    }
    if (isset($_POST['tan']) && $_POST['tan'] == 'Tan') {
      $op = new Tan($o1, $o2,1);
    }


// Put code for subtraction, multiplication, and division here


  }
  catch (Exception $e) {
    $err[] = $e->getMessage();
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>PHP Calculator</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<h1>TI-108 Sim+</h1>
<pre id="result">
  <?php 
    if (isset($op)) {
      try {
        echo $op->getEquation();
      }
      catch (Exception $e) { 
        $err[] = $e->getMessage();
      }
    }

    foreach($err as $error) {
        echo $error . "\n";
    } 
  ?>
  </pre>
  <form method="post" action="index.php">
    <input type="text" name="op1" id="left" value="" maxlength="10"/>
    <input type="text" name="op2" id="right" value="" maxlength="10"/>
    <br/><br/>
    <!-- Only one of these will be set with their respective value at a time -->
    <div class="buttonwrap">
      <div class="numpad">
        </br>
        <input type="button" class="func" value="<-" onclick="leftin()" style="color:white"/>
        <input type="button" class="func" value="->" onclick="rightin()" style="color:white"/>
        <input type="button" class="func" value="C" onclick="erase()" style="color:white"/>
        <input type="button" class="func" value="del" onclick="dele()" style="color:white"/>
        </br>
        <input onclick="input(this)" class="press" type="button" name="seven" value="7"/>
        <input onclick="input(this)" class="press" type="button" name="eight" value="8"/>
        <input onclick="input(this)" class="press" type="button" name="nine" value="9"/>
        <input type="submit" name="add" value="+" />
        </br>
        <input onclick="input(this)" class="press" type="button" name="four" value="4"/>
        <input onclick="input(this)" class="press" type="button" name="five" value="5"/>
        <input onclick="input(this)" class="press" type="button" name="six" value="6"/>
        <input type="submit" name="sub" value="-" /> 
        </br>
        <input onclick="input(this)" class="press" type="button" name="one" value="1"/>
        <input onclick="input(this)" class="press" type="button" name="two" value="2"/>
        <input onclick="input(this)" class="press" type="button" name="three" value="3"/>
        <input type="submit" name="mult" value="X" /> 
        </br>
        <input type="button" class="func" value="Off" onclick="off()" style="color:white"/>
        <input onclick="input(this)" class="press" type="button" name="zero" value="0"/>
        <input onclick="input(this)" class="press" type="button" name="dot" value="."/>
        <input type="submit" name="divi" value="/" /> 
          
      </div>
      <div class="rchild">
        </br>
        <input type="submit" name="log10" value="Log10" />  <input type="submit" name="ln" value="Ln" />
        </br> 
        <input type="submit" name="sqrt" value="Sqrt" />
        <input type="submit" name="x^2" value="x^2" />
        </br>
        <input type="submit" name="x^y" value="x^y" />
        <input type="submit" name="10^x" value="10^x" />
        </br>
        <input type="submit" name="e^x" value="e^x" />
        <input type="submit" name="sin" value="Sin" />
        </br>
        <input type="submit" name="cos" value="Cos" />
        <input type="submit" name="tan" value="Tan" />
      </div>
    </div>   
    
    
    
    <br/>
    
    
    <br/>
    
    
    
    
  </form>
</div>

</body>
<script src="script.js"></script>
</html>

