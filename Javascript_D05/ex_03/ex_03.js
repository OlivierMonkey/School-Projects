$(document).ready(function(){
    $("#add").click(function(){
	var tmp = $("#listItem").val();
	var classe = $("#dropdown").val();
	$("ul").append("<li class="+ classe +">" + tmp + "</li>");
    });
});

$(document).ready(function(){
    $("#search").click(function(){
	var search = $('#searchtype').val();
	var tmp = '.'+search;
	$("li").show();
	//$("li:not(."+search+")").hide();
	$("li:not("+tmp+")").hide();
    });
});
