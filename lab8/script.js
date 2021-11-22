$(document).ready(function() {
    jsondata();
    all();
})

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("leftnav").style.width = "400px";
    document.getElementById("main").style.marginLeft = "400px";
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("leftnav").style.width = "0";
    document.getElementById("main").style.marginLeft = "auto";
  }

function refresh(){
    document.getElementById("leftnav").innerHTML = "<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>";
    setTimeout(function(){
        jsondata();
    }, 500);
}

function display(type, num) {
    $.ajax({
        type: 'GET',
        url: 'websys.json',
        dataType: 'json',
        success: function(data) {
            if (type == "lect") {
                var l = "<h3>Lecture " + num + ": " + data.websys_course.lectures[num-1].title + "</h3>";
                l += "<p>" + data.websys_course.lectures[num-1].description + "</p>";
                l += "<a target=\"_blank\" href=\"" + data.websys_course.lectures[num-1].link + "\">Click to view the Presentation</a>";
            }
            if (type == "lab") {
                var l = "<h3>Lab " + num + ": " + data.websys_course.Labs[num-1].title + "</h3>";
                l += "<p>" + data.websys_course.Labs[num-1].description + "</p>";
                l += "<a target=\"_blank\" href=\"" + data.websys_course.Labs[num-1].link + "\">Click to view the Lab</a>";
            }
            document.getElementById("preview").innerHTML = l;
        },
        error: function(){
            alert('Error: could not make ajax request');
        }
    })
}

function all(type, num) {
    $.ajax({
        type: 'GET',
        url: 'websys.json',
        dataType: 'json',
        success: function(data) {
            for(var i=1; i<data.websys_course.lectures.length+1; i++) {
                var l = "<div class=\"cont\"><h3>Lecture " + i + ": " + data.websys_course.lectures[i-1].title + "</h3>";
                l += "<p>" + data.websys_course.lectures[i-1].description + "</p>";
                l += "<a target=\"_blank\" href=\"" + data.websys_course.lectures[i-1].link + "\">Click to view the Presentation</a></div></br>";
                $('#all').append(l);
            }
            for(var i=1; i<data.websys_course.Labs.length+1; i++) {
                var l = "<div class=\"cont\"><h3>Lab " + i + ": " + data.websys_course.Labs[i-1].title + "</h3>";
                l += "<p>" + data.websys_course.Labs[i-1].description + "</p>";
                l += "<a target=\"_blank\" href=\"" + data.websys_course.Labs[i-1].link + "\">Click to view the Lab</a></div></br>";
                $('#all').append(l);
            }
        },
        error: function(){
            alert('Error: could not make ajax request');
        }
    })
}

function jsondata(){
    $.ajax({
    type: 'GET',
    url: 'websys.json',
    dataType: 'json',
    success: function(data) {
        for(var i=1; i<data.websys_course.lectures.length+1; i++) {
            var l = "<a href=# onclick=display(\"lect\"," + i +")>";
            l += "Lecture " + i + ": " +data.websys_course.lectures[i-1].title + "</a></br>";
            $('#leftnav').append(l);
        }
        for(var i=1; i<data.websys_course.Labs.length+1; i++) {
            var g = "<a href=# onclick=display(\"lab\"," + i +")>";
            g += "Lab " + i + " : " + data.websys_course.Labs[i-1].title + "</a></br>";
            $('#leftnav').append(g);
        }
    },
    error: function(){
        alert('Error: could not make ajax request');
    }
});
}


