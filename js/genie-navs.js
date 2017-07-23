$(document).ready(function(){
	$(".nav a").on("click", function(){
		$(".nav").find(".active").removeClass("active");
		$(this).parent().addClass("active");
	});
	
	$("#genie-bid").on("click", function(){
		$("#user-content").load( "genie/bid/geniebid.html",  function( responseTxt, statusTxt, xhr ) {
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		});
	});
	
	$("#genie-timeline").on("click", function(){
		$("#user-content").load( "genie/timeline/genietimeline.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		}
	});	
	
	$("#genie-history").on("click", function(){
		$("#user-content").load( "genie/bid/geniehistory.html",  function( responseTxt, statusTxt, xhr ) {
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		});
	});
	
	$("#genie-messages").on("click", function(){
		$("#user-content").load( "genie/messages/geniemessages.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		}
	});

	$("#genie-earnings").on("click", function(){
		$("#user-content").load( "genie/payment/genieearnings.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		}
	});
	
	$("#genie-account").on("click", function(){
		$("#user-content").load( "genie/account/genieaccount.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		}
	});
	
	$("#genie-reviews").on("click", function(){
		$("#user-content").load( "genie/reviews/geniereviews.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		}
	});
	
	$("#genie-perks").on("click", function(){
		$("#user-content").load( "genie/perks/genieperks.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		}
	});	
});