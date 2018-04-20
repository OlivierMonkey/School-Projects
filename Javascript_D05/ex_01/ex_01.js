$(document).ready(function(){
    $("button").click(function(){
	var tmp = $("#listItem").val();
    $("ul").append("<li>" + tmp + "</li>");
    });
});

	
