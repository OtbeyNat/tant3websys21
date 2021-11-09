var left = 1;
document.getElementById("left").style.background="green";

function leftin() {
  left = 1;
  document.getElementById("left").style.background="green";
  document.getElementById("right").style.background="rgb(112, 172, 112)";
}

function rightin() {
  left = 0;
  document.getElementById("right").style.background="green";
  document.getElementById("left").style.background="rgb(112, 172, 112)";
}

function input(e) {
    if (left == 1) {
      var tbInput = document.getElementById("left");
      tbInput.value = tbInput.value + e.value;
    }
    else {
      var tbInput = document.getElementById("right");
      tbInput.value = tbInput.value + e.value;
    }   
}

function dele() {
    if (left == 1) {
      var tbInput = document.getElementById("left");
      tbInput.value = tbInput.value.substr(0,tbInput.value.length - 1);
    }
    else {
      var tbInput = document.getElementById("right");
      tbInput.value = tbInput.value.substr(0,tbInput.value.length - 1);
    }
}

function erase() {
    if (left == 1) {
      var tbInput = document.getElementById("left");
      tbInput.value = "";
    }
    else {
      var tbInput = document.getElementById("right");
      tbInput.value = "";
    }
}

function off() {
  document.getElementById("result").innerHTML = "";
}
