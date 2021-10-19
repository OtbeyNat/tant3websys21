$(document).ready( function() {
 $.getJSON("json_data.json", function(data){
       $.each(data.rates, function(){
         $("1").append("<h3>"+this['USD']+"</h3>"
                                <br/>");
   });
 });

 /*
Perhaps to my lack of knowledge and understanding, I was unable to retrieve the data from json and manipulate the html with it.
 */