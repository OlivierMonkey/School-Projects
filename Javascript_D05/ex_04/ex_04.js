$(document).ready(function(){
    $("#add").click(function(){
	var tmp = $("#listItem").val();
	var classe = $("#dropdown").val();
	$("ul").append("<li class="+ classe +">" + tmp + "</li>");
    });
});

$(document).ready(function(){
    $("#search").click(function(){
	var search = $('input[type="search"]').val();
	var search2 = $('#searchtype').val();
	$("li").show();
	if (search != "")
	{
	    $("li").hide();
	    $("li:contains("+search+")").show();
	}	
	if (search2 != "none")
	    $("li:not(."+search2+")").hide();
    });
});
