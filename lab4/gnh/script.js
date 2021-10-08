
/*FOOTER to JSON*/


var myFooter, new_footer;
//Storing data:
var footerObj = {innerHTML: "<div class=\"col\">Quick Links:<br><a class=\"footlink\"href=\"index.html\">Home</a><br><a class=\"footlink\" href=\"events.html\">Events/Activities</a><br><a class=\"footlink\"href=\"contact.html\">Contact Us</a><br></div><div class=\"col\" style=\"width:10vw\">Emails:<br><i class=\"fas fa-envelope-open ml-3\"></i><span><a class=\"footlink\" href=\"href=\"mailto:INSERTHERE\" class = \"contact-button1\" target=\"_blank\"> President: smitha24@rpi.edu</a></span><br><i class=\"fas fa-envelope-open ml-3\"></i><span><a class=\"footlink\" href=\"href=\"mailto:INSERTHERE\" class = \"contact-button1\"  target=\"_blank\"> Organization: gammanueta@rpi.edu</a></span></div><div class=\"col\">Social Media: <br><a href=\"#\" class=\"social\"><i class=\"fab fa-facebook-f\"></i></a><a href=\"#\" class=\"social\"><i class=\"fab fa-twitter\"></i></a><a href=\"#\" class=\"social\"><i class=\"fab fa-tiktok\"></i></a><a href=\"#\" class=\"social\"><i class=\"fab fa-instagram\"></i></a><a href=\"#\" class=\"social\"><i class=\"fab fa-linkedin\"></i></a></div>"};
myFooter = JSON.stringify(footerObj);
new_footer = JSON.parse(myFooter);
document.getElementById("footer").innerHTML = new_footer.innerHTML;


var myHeader, header;
//Storing data:
var newObj = {innerHTML: "<div id = \"header\"><h1 id =\"title\">GAMMA NU ETA</h1><h3 id =\"sub-title\">ITWS Honors Society</h3></div><a href=\"events.html\" class=\"main-button\" id = \"button-1\"><span> See Our Events &#187; </span></a><a href=\"https://rpi.edu/\" class=\"main-button\" id = \"button-2\"><span> &#171; Our University </span></a>"};
myHeader = JSON.stringify(newObj);
//Retrieving data:
header = JSON.parse(myHeader);
document.getElementById("full-header").innerHTML = header.innerHTML;
//Retrieving data:


/*NAVBAR to JSON*/
var myNavbar, navbar;
//Storing data:
var obj_3 = {innerHTML: "<a href=\"index.html\">Home</a><a href=\"events.html\">Events</a><a href = \"#footer\">Contact Us</a>"};
var myNavbar = JSON.stringify(obj_3);
var navbar = JSON.parse(myNavbar);
document.getElementById("mySidenav").innerHTML = navbar.innerHTML;

function validate(formObj) {
   var flag = 1;
   if (formObj.email.value == "") 
   {
      alert("You must enter a email");
      formObj.email.focus();
      flag = 0;
      return false;
   }
   if (flag)
   {
   	alert("You have successfully submitted");
   	return true;
   }
}
/*ITWS NEWS API */
var it_jokes = ["There are 10 types of people in the world: those who understand binary, and those who don't.", "How many programmers does it take to change a light bulb?<br>None. It's a hardware problem.", "A SEO couple had twins. For the first time they were happy with duplicate content.", "Why is it that programmers always confuse Halloween with Christmas?<br>Because 31 OCT = 25 DEC", "Why do they call it hyper text?<br>Too much JAVA.", "Why was the JavaScript developer sad?<br>Because he didn't Node how to Express himself", "In order to understand recursion you must first understand recursion.", "Why do Java developers wear glasses? Because they can't C#", "What do you call 8 hobbits?<br>A hobbyte", "Why did the developer go broke?<br>Because he used up all his cache"];

change_text(0);
function change_text(i){
  if (it_jokes.length > i) {
    setTimeout(function() {
      document.getElementById("joke").innerHTML = it_jokes[i];
      change_text(++i);
    }, 4000); // 5 seconds (in milliseconds)
  } else if (it_jokes.length == i) { // Loop
    change_text(0);
  }
}
