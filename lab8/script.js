$(document).ready(function() {
    jsondata();
})

function display(type, num) {
    if (type == "lect") {

    }
    if (type == "lab") {
        
    }
}

function jsondata(){
    $.ajax({
    type: 'GET',
    url: 'websys.json',
    dataType: 'json',
    success: function(data) {
        //alert(data.websys_course.lectures.length);
        //alert(data.websys_course.Labs.length);
        //alert(data.websys_course.lectures[0].title);
        var l = "<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>\""
        for(var i=1; i<data.websys_course.lectures.length+1; i++) {
            l += "<a onclick=display(\"lect\"," + i +")>";

            l += "Lecture " + i + ": " +data.websys_course.lectures[i-1].title + "</a>";
            $('#leftnav').append(l);
        }
        for(var i=1; i<data.websys_course.Labs.length+1; i++) {
            var l = "<a onclick=display(\"lab\"," + i +")>";

            l += "<a>Lab " + i + " : " + data.websys_course.Labs[i-1].title + "</a>";
            $('#leftnav').append(l);
        }
    },
    error: function(){
        alert('Error: could not make ajax request');
    }
});
}

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
