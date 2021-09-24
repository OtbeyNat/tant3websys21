var amendments = ['The First Amendment - freedom of religion, speech, press, and assembly.', "The Second Amendment - right to keep and bear arms.", "The Third Amendment - no forced quartering of troops.", "The Fourth Amendment - no unreasonable searches and seizures", "The Fifth Amendment - guarantees a trial by jury and 'due process of law', no double jeopardy and self-incrimination.", "The Sixth Amendment - accused can have 'speedy and public' trial, will be informed of the charges made against him, can call witnesses in his defense, can have an attorney in his defense.", "The Seventh Amendment - lays out the rules of common law.", "The Eighth Amendment - no 'cruel and unusual' punishments.", "The Ninth Amendment - There are other rights not listed in the constitution", "The Tenth Amendment - limits the power of federal government by reserving for the states all powers that are not explicitly granted to the federal government by the Constitution, nor denied to the states."];

change_text(0);
function change_text(i){
  if (amendments.length > i) {
    setTimeout(function() {
      document.getElementById("amendment_var").innerHTML = amendments[i];
      change_text(++i);
    }, 5000); // 5 seconds (in milliseconds)
  } else if (amendments.length == i) { // Loop
    change_text(0);
  }
}