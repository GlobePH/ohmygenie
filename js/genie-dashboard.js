$(document).ready( function(){
	$(".nav a").on("click", function(){
		$(".nav").find(".active").removeClass("active");
		$(this).parent().addClass("active");
	});
	
	$.ajaxSetup ({
    // Disable caching of AJAX responses
		cache: false
	});
	
	$("#genie-content").load( "bid/geniebid.html",  function( responseTxt, statusTxt, xhr ) {
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.1";
				alert(msg);
			}
	});
	
	$("#genie-bid").on("click", function(){
		$("#genie-content").load( "bid/geniebid.html",  function( responseTxt, statusTxt, xhr ) {
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.2";
				alert(msg);
			}
		});
	});
	
	$("#genie-history").on("click", function(){
		$("#genie-content").load( "bid/geniehistory.html",  function( responseTxt, statusTxt, xhr ) {
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.3";
				alert(msg);
			}
		});
	});

	$("#genie-earnings").on("click", function(){
		$("#genie-content").load( "payment/genieearnings.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.4";
				alert(msg);
			}
		}
	});
	
	$("#genie-account").on("click", function(){
		$("#genie-content").load( "account/genieaccount.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.5";
				alert(msg);
			}
		}
	});
	
	$("#genie-reviews").on("click", function(){
		$("#genie-content").load( "reviews/geniereviews.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.6";
				alert(msg);
			}
		}
	});
});