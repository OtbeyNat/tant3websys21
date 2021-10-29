var all;
var daily_play;
var found;
var foundlist = [];
var guess;
var letters = [],
	todayletters = [];
var points;
var rank1, rank2, rank3, rank4, rank5, rank6, rank7, rank8, rank9;
var replaying;
var total, todaytotal, yesterdaytotal;
var win;
var wordlist = [],
	todaywordlist = [],
	yesterdaywordlist = [];
var words, todaywords, yesterdaywords;
var dark;

function resetdisplay() {
  document.getElementById("no-message").style.display = "inline";
	document.getElementById("pangram").style.display = "none";
	document.getElementById("already-found").style.display = "none";
	document.getElementById("center-letter").style.display = "none";
	document.getElementById("too-short").style.display = "none";
	document.getElementById("not-in-list").style.display = "none";
}

function type(letter, combno) {
  resetdisplay();
	document.getElementById("comb" + combno).id = "ccomb" + combno;
	document.getElementById("guess").value = document.getElementById("guess").value + letter;
}

function untype(combno) {
	document.getElementById("ccomb" + combno).id = "comb" + combno;
}

//replaced images with spritesheet
function display() {
	var didtouch = 0;

  document.getElementById("play1").removeAttribute("class");
  document.getElementById("play1").classList.add("fg");
  document.getElementById("play1").classList.add(letters[0]);
	document.getElementById("play1").style.left = "21px";
	document.getElementById("play1").style.top = "51px";
	document.getElementById("play1").ontouchstart = function() {
		didtouch = 1;
		type(letters[0], 1);
	};
	document.getElementById("play1").onmousedown = function() {
		if (didtouch != 1) {
			type(letters[0], 1);
		}
	};
	document.getElementById("play1").style.display = "block";
	document.getElementById("play1").onmouseup = function() {
		untype(1);
	};
	document.getElementById("play1").ondragend = function() {
		untype(1);
	};
	document.getElementById("play1").ontouchend = function() {
		untype(1);
	};
	document.getElementById("play1").ontouchcancel = function() {
		untype(1);
	};

  document.getElementById("play2").removeAttribute("class");
  document.getElementById("play2").classList.add("fg");
	document.getElementById("play2").classList.add(letters[1]);
	document.getElementById("play2").style.left = "100px";
	document.getElementById("play2").style.top = "1px";
	document.getElementById("play2").ontouchstart = function() {
		didtouch = 1;
		type(letters[1], 2);
	};
	document.getElementById("play2").onmousedown = function() {
		if (didtouch != 1) {
			type(letters[1], 2);
		}
	};
	document.getElementById("play2").style.display = "block";
	document.getElementById("play2").onmouseup = function() {
		untype(2);
	};
	document.getElementById("play2").ondragend = function() {
		untype(2);
	};
	document.getElementById("play2").ontouchend = function() {
		untype(2);
	};
	document.getElementById("play2").ontouchcancel = function() {
		untype(2);
	};

  document.getElementById("play3").removeAttribute("class");
  document.getElementById("play3").classList.add("fg");
	document.getElementById("play3").classList.add(letters[2]);
	document.getElementById("play3").style.left = "179px";
	document.getElementById("play3").style.top = "51px";
	document.getElementById("play3").ontouchstart = function() {
		didtouch = 1;
		type(letters[2], 3);
	};
	document.getElementById("play3").onmousedown = function() {
		if (didtouch != 1) {
			type(letters[2], 3);
		}
	};
	document.getElementById("play3").style.display = "block";
	document.getElementById("play3").onmouseup = function() {
		untype(3);
	};
	document.getElementById("play3").ondragend = function() {
		untype(3);
	};
	document.getElementById("play3").ontouchend = function() {
		untype(3);
	};
	document.getElementById("play3").ontouchcancel = function() {
		untype(3);
	};

  document.getElementById("play4").removeAttribute("class");
  document.getElementById("play4").classList.add("fg");
	document.getElementById("play4").classList.add(letters[3]);
	document.getElementById("play4").style.left = "21px";
	document.getElementById("play4").style.top = "149px";
	document.getElementById("play4").ontouchstart = function() {
		didtouch = 1;
		type(letters[3], 4);
	};
	document.getElementById("play4").onmousedown = function() {
		if (didtouch != 1) {
			type(letters[3], 4);
		}
	};
	document.getElementById("play4").style.display = "block";
	document.getElementById("play4").onmouseup = function() {
		untype(4);
	};
	document.getElementById("play4").ondragend = function() {
		untype(4);
	};
	document.getElementById("play4").ontouchend = function() {
		untype(4);
	};
	document.getElementById("play4").ontouchcancel = function() {
		untype(4);
	};

  document.getElementById("play5").removeAttribute("class");
  document.getElementById("play5").classList.add("fg");
	document.getElementById("play5").classList.add(letters[4]);
	document.getElementById("play5").style.left = "100px";
	document.getElementById("play5").style.top = "199px";
	document.getElementById("play5").ontouchstart = function() {
		didtouch = 1;
		type(letters[4], 5);
	};
	document.getElementById("play5").onmousedown = function() {
		if (didtouch != 1) {
			type(letters[4], 5);
		}
	};
	document.getElementById("play5").style.display = "block";
	document.getElementById("play5").onmouseup = function() {
		untype(5);
	};
	document.getElementById("play5").ondragend = function() {
		untype(5);
	};
	document.getElementById("play5").ontouchend = function() {
		untype(5);
	};
	document.getElementById("play5").ontouchcancel = function() {
		untype(5);
	};

  document.getElementById("play6").removeAttribute("class");
  document.getElementById("play6").classList.add("fg");
	document.getElementById("play6").classList.add(letters[5]);
	document.getElementById("play6").style.left = "179px";
	document.getElementById("play6").style.top = "149px";
	document.getElementById("play6").ontouchstart = function() {
		didtouch = 1;
		type(letters[5], 6);
	};
	document.getElementById("play6").onmousedown = function() {
		if (didtouch != 1) {
			type(letters[5], 6);
		}
	};
	document.getElementById("play6").style.display = "block";
	document.getElementById("play6").onmouseup = function() {
		untype(6);
	};
	document.getElementById("play6").ondragend = function() {
		untype(6);
	};
	document.getElementById("play6").ontouchend = function() {
		untype(6);
	};
	document.getElementById("play6").ontouchcancel = function() {
		untype(6);
	};

  document.getElementById("play7").removeAttribute("class");
  document.getElementById("play7").classList.add("fg");
	document.getElementById("play7").classList.add("_"+letters[6]);
	document.getElementById("play7").style.left = "100px";
	document.getElementById("play7").style.top = "100px";
	document.getElementById("play7").ontouchstart = function() {
		didtouch = 1;
		type(letters[6][1], 7);
	};
	document.getElementById("play7").onmousedown = function() {
		if (didtouch != 1) {
			type(letters[6][1], 7);
		}
	};
	document.getElementById("play7").style.display = "block";
	document.getElementById("play7").onmouseup = function() {
		untype(7);
	};
	document.getElementById("play7").ondragend = function() {
		untype(7);
	};
	document.getElementById("play7").ontouchend = function() {
		untype(7);
	};
	document.getElementById("play7").ontouchcancel = function() {
		untype(7);
	};
}

function update_rank() {
	var rank;

	if (points >= rank9) {
		if (win == 0) {
			alert("You earned the rank of Queen Bee!\n\nCan you find all the words?");
			win = 1;
		}
		rank = "Queen Bee!";
    document.getElementById("bee").style.width = "130px";
    document.getElementById("bee").style.height = "130px";
	} else if (points >= rank8) {
		rank = "Outstanding";
    document.getElementById("bee").style.width = "120px";
    document.getElementById("bee").style.height = "120px";
	} else if (points >= rank7) {
		rank = "Marvellous";
    document.getElementById("bee").style.width = "110px";
    document.getElementById("bee").style.height = "110px";
	} else if (points >= rank6) {
		rank = "Superb";
    document.getElementById("bee").style.width = "100px";
    document.getElementById("bee").style.height = "100px";
	} else if (points >= rank5) {
		rank = "Excellent";
    document.getElementById("bee").style.width = "90px";
    document.getElementById("bee").style.height = "90px";
	} else if (points >= rank4) {
		rank = "Skilled";
    document.getElementById("bee").style.width = "80px";
    document.getElementById("bee").style.height = "80px";
	} else if (points >= rank3) {
		rank = "Fine";
    document.getElementById("bee").style.width = "70px";
    document.getElementById("bee").style.height = "70px";
	} else if (points >= rank2) {
		rank = "Novice";
    document.getElementById("bee").style.width = "65px";
    document.getElementById("bee").style.height = "65px";
	} else {
		rank = "Newbie";
    document.getElementById("bee").style.width = "60px";
    document.getElementById("bee").style.height = "60px";
	}

	document.getElementById("rank-update").innerHTML = rank;
}

function set_rank() {
	rank1 = 0;
	rank2 = Math.floor(total * 0.02);
	rank3 = Math.floor(total * 0.05);
	rank4 = Math.floor(total * 0.08);
	rank5 = Math.floor(total * 0.15);
	rank6 = Math.floor(total * 0.25);
	rank7 = Math.floor(total * 0.40);
	rank8 = Math.floor(total * 0.50);
	rank9 = Math.floor(total * 0.70);
}

function save_word() {
	localStorage.setItem("foundwords", JSON.stringify(foundlist));
}

function add_points() {
	var one = two = three = four = five = six = 0;
	var i = j = 0;

	if (daily_play === 1) {
		save_word();
	}

	i = guess.length;
	if (i < 7) {
		if (i == 4) {
			i = 1;
		}
		points = points + i;

		return;
	}

	i = 0;
	while (i < guess.length) {
		for (j = 0; j < 7; j++) {
			if (guess[i] == letters[j]) {
				if (j == 0) {
					one = 1;
				}
				if (j == 1) {
					two = 1;
				}
				if (j == 2) {
					three = 1;
				}
				if (j == 3) {
					four = 1;
				}
				if (j == 4) {
					five = 1;
				}
				if (j == 5) {
					six = 1;
				}
			}
		}
		i = i + 1;
	}

	if (one == 1 && two == 1 && three == 1 && four == 1 && five == 1 && six == 1) {
		points = points + guess.length + 7;
		document.getElementById("no-message").style.display = "none";
		document.getElementById("pangram").style.display = "inline";

		return;
	}
	points = points + guess.length;
}

function found_word() {
	var i;
	for (i = 0; i < found; i++) {
		if (guess == foundlist[i]) {
			document.getElementById("no-message").style.display = "none";
			document.getElementById("already-found").style.display = "inline";
			return 1;
		}
	}

	foundlist.push(guess);

	found = found + 1;

	add_points();

  //points = 15; //Fine
  //points = 20; //Skilled
  //points = 40; //Excellent
  //points = 80; //Superb
  //points = 100; //Marvelous
  //points = 150; //Outstanding
  //points = 300;

	document.getElementById("points-update").innerHTML = points;
	document.getElementById("answers-update").innerHTML = foundlist.join("<br />");

  
	update_rank();

	if (found == words) {
		alert("Congratulations! You found all the words!");
		all = 1;
	}

	return 0;
}

function check() {
	var center = 0,	i;
	resetdisplay();

	if (replaying === 0) {
		guess = document.getElementById("guess").value.toLowerCase();
		document.getElementById("player-guess").reset();
	} else {
		guess = guess.toLowerCase();
	}
	for (i = 0; i < guess.length; i++) {
		if ("7" + guess[i] == letters[6]) {
			center = 1;
		}
	}
	if (guess.length < 4) {
		document.getElementById("no-message").style.display = "none";
		document.getElementById("too-short").style.display = "inline";
		return 1;
	}
	if (center == 0) {
		document.getElementById("no-message").style.display = "none";
		document.getElementById("center-letter").style.display = "inline";
		return 1;
	}

	for (i = 0; i < words; i++) {
		if (guess == wordlist[i]) {
			i = found_word();
			return i;
		}
	}
	document.getElementById("no-message").style.display = "none";
	document.getElementById("not-in-list").style.display = "inline";
	return 1;
}

function replay_words() {
	var i, replay;

	replaying = 1;
  replay = JSON.parse(localStorage.getItem("foundwords"));
	localStorage.removeItem("foundwords");

	for (i = 0; i < replay.length; i++) {
		guess = replay[i];

		if (check() == 1) {
			localStorage.removeItem("foundwords");
			for (i = 0; i < found; i++) {
				foundlist.pop();
			}
			all = found = points = win = 0;
			rank = "Newbie";
      document.getElementById("bee").style.width = "60px";
      document.getElementById("bee").style.height = "60px";
			resetdisplay();
			replaying = 0;

			return;
		}
	}
	resetdisplay();
	replaying = 0;
}

function daily() {
	var i;
	daily_play = 1;
	for (i = 0; i < found; i++) {
		foundlist.pop();
	}
	all = found = points = win = replaying = 0;
	rank = "Newbie";
  document.getElementById("bee").style.width = "60px";
  document.getElementById("bee").style.height = "60px";

	document.getElementById("points-update").innerHTML = points;
	document.getElementById("answers-update").innerHTML = foundlist.join("<br />");
	document.getElementById("rank-update").innerHTML = rank;
	document.getElementById("yesterday-or-random").innerHTML = "Yesterday's answers";
	document.getElementById("random-answers").style.display = "none";
	document.getElementById("restart-daily-button").style.visibility = "hidden";
	document.getElementById("update-random").innerHTML = "";
	resetdisplay();

  for (i = 1; i < 8; i++) {
		document.getElementById("play"+i).style.display = "none";
	}
  for (i = 0; i < 7; i++) {
		letters[i] = todayletters[i];
	}
	words = todaywords;
	total = todaytotal;
	wordlist = todaywordlist;
	set_rank();
	if (localStorage.hasOwnProperty("foundwords") === true) {
		replay_words();
	}
	document.getElementById("update-random").innerHTML = yesterdaywordlist.join("<br />") + "<br />" + "<br />Total words:  " + yesterdaywords + "<br />Total points: " + yesterdaytotal + "<br />Points for Queen Bee: " + Math.floor(yesterdaytotal * 0.70);
	display();
}

function get_yesterday() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var gameObj = JSON.parse(this.responseText);
			yesterdaywords = gameObj.words;
			yesterdaytotal = gameObj.total;
			yesterdaywordlist = gameObj.wordlist;
		}
	};
	xhttp.open("GET", "yesterday", true);
	xhttp.send();
}

function get_today() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var gameObj = JSON.parse(this.responseText);
			
      for (i = 0; i < 6; i++) {
        todayletters[i] = gameObj.letters[i];
      }
			todayletters[6] = "7" + gameObj.center;
			todaywords = gameObj.words;
			todaytotal = gameObj.total;
			todaywordlist = gameObj.wordlist;
			daily();
		}
	};
	xhttp.open("GET", "today", true);
	xhttp.send();
}

window.onload = function() {	
	get_yesterday();
	get_today();
};

function shuffle() {
	var i, j, t;
	for (i = 5; i > 0; i--) {
		j = Math.floor(Math.random() * (i + 1));
		t = letters[j];
		letters[j] = letters[i];
		letters[i] = t;
	}
	display();
}

function random() {
	var xhttp = new XMLHttpRequest();
	var i;
	daily_play = 0;
	for (i = 0; i < found; i++) {
		foundlist.pop();
	}

	all = found = points = win = 0;

	rank = "Newbie";
  document.getElementById("bee").style.width = "60px";
  document.getElementById("bee").style.height = "60px";
	document.getElementById("points-update").innerHTML = points;
	document.getElementById("answers-update").innerHTML = foundlist.join("<br />");
	document.getElementById("rank-update").innerHTML = rank;
	document.getElementById("yesterday-or-random").innerHTML = "Answers";
	document.getElementById("update-random").innerHTML = "";
	resetdisplay();
  for (i=1; i<8; i++) {
    document.getElementById("play"+i).style.display = "none";
  }
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var gameObj = JSON.parse(this.responseText);
			for (i=0; i<6; i++) {
        letters[i] = gameObj.letters[i];
      }
			letters[6] = "7" + gameObj.center;
			words = gameObj.words;
			total = gameObj.total;
			wordlist = gameObj.wordlist;
			set_rank();
			display();
			document.getElementById("random-answers").style.display = "block";
			document.getElementById("restart-daily-button").style.visibility = "visible";
		}
	};
	xhttp.open("GET", "../../cgi-bin/random", true);
	xhttp.send();
}
function show_random() {
	document.getElementById("update-random").innerHTML = wordlist.join("<br />") + "<br />" + "<br />Total words:  " + words + "<br />Total points: " + total + "<br />Points for Queen Bee: " + Math.floor(total * 0.70);
}
function delete_letter() {
	var str = document.getElementById("guess").value;
	var len = str.length;
	str = str.slice(0, len - 1) + str.slice(len, len);
	document.getElementById("guess").value = str;
}