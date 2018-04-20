$(document).ready(function(){
    $("#add").click(function(){
	var tmp = $("#listItem").val();
	var tag = $("#tagItem").val();
	var classe = $("#dropdown").val();
	$("ul").append("<li class="+classe+">"+tmp+"</li>");
	$("ul").on("click", "li", function(){
	    if ($(this).hasClass("todo"))
	    {
		var tag2 = prompt("entrez un tag");
		$(this).append("<br>"+"Tag:"+"<i>"+tag2+"</i>");
	    }
	});
	    /*console.log("yo");
	    $("#addtag").click(function(){
		//$("ul").append("<li class="+classe+">"+tmp+"</li>");
		//$("ul").children().append("<span> "+tag+" </span>");
		//$(("ul"):last-child).append("<span>"+tag+"</span>");
		$("ul>li:last").append("<span> "+tag+" </span>");
	    });
	}*/
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

