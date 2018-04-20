$(document).ready(function(){
    $("button").click(function(){
	var tmp = $("#listItem").val();
	var classe = $("#dropdown").val();
	$("ul").append("<li class="+ classe +">" + tmp + "</li>");
	/*if (($("#dropdown").val()) == "note")
	{
	    tmp().addClass("note");
	    $("ul").append("<li>" + tmp + "</li>");
	    //$("ul").append("<li class='note'>" + tmp + "</li>");
	}
	else if (($("#dropdown").val()) == "email")
	    $("ul").append("<li class='email'>" + tmp + "</li>");
	else if (($("#dropdown").val()) == "todo")
	    $("ul").append("<li class='todo'>" + tmp + "</li>");*/
    });
});
