$(document).ready( function(){
	
	var isUser = true;

	$.ajaxSetup ({
    // Disable caching of AJAX responses
		cache: false
	});
	
	$("#user-content").load( "user/task/usertask.html",  function( responseTxt, statusTxt, xhr ) {
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
	});
	
	$("#omg-main-menu").load("navigation/user-navs.html", function( responseTxt, statusTxt, xhr ) {
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
	});
	
	
	$("#searchCmd").on("click", function(){
		$("#user-content").load( "user/search/search.html",  function( responseTxt, statusTxt, xhr ) {
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		});
	});
	$("#switch-user").on("click", function(e)
	{
		if( isUser )
		{
			$("#switch-user").html("<span class='glyphicon glyphicon-transfer'></span> Switch as User");
			$("#omg-main-menu").load("navigation/genie-navs.html", function( responseTxt, statusTxt, xhr ) {
				if(statusTxt == "error"){
					var msg = "Oops! Sorry there was a problem loading the page.";
					alert(msg);
				}
			});
			$("#user-content").load( "genie/bid/geniebid.html");
			$("#switch-status").html("You're logged in as genie");
			$('#chgLocModal').modal('show');
			e.preventDefault();
			$('#user-content a[href="#genieResult"]').tab('show');
			isUser = false;
		}
		else
		{
			$("#switch-user").html("<span class='glyphicon glyphicon-transfer'></span> Switch as Genie");
			$("#omg-main-menu").load("navigation/user-navs.html", function( responseTxt, statusTxt, xhr ) {
				if(statusTxt == "error"){
					var msg = "Oops! Sorry there was a problem loading the page.";
					alert(msg);
				}
			});
			$("#user-content").load( "user/task/usertask.html");
			$("#switch-status").html("You're logged in as user");
			isUser = true;
		}
	});
});