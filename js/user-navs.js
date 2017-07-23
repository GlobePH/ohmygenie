$(document).ready( function(){
	//Function that will change the active status of narbar.
	$(".nav a").on("click", function(){
		$(".nav").find(".active").removeClass("active");
		$(this).parent().addClass("active");
	});
	
	$("#user-task").on("click", function(){
		$("#user-content").load( "user/task/usertask.html",  function( responseTxt, statusTxt, xhr ) {
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		});
	});
	
	$("#user-timeline").on("click", function(){
		$("#user-content").load( "user/task/usertimeline.html",  function( responseTxt, statusTxt, xhr ) {
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		});
	});
	
	$("#user-history").on("click", function(){
		$("#user-content").load( "user/task/userhistory.html",  function( responseTxt, statusTxt, xhr ) {
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		});
	});
	
	$("#user-messages").on("click", function(){
		$("#user-content").load( "user/messages/usermessages.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		}
	});

	$("#user-payment").on("click", function(){
		$("#user-content").load( "user/payment/userpayment.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		}
	});
	
	$("#user-account").on("click", function(){
		$("#user-content").load( "user/account/useraccount.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		}
	});
	
	$("#user-reviews").on("click", function(){
		$("#user-content").load( "user/reviews/userreviews.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		}
	});
	
	$("#user-perks").on("click", function(){
		$("#user-content").load( "user/perks/userperks.html"), function( responseTxt, statusTxt, xhr ){
			if(statusTxt == "error"){
				var msg = "Oops! Sorry there was a problem loading the page.";
				alert(msg);
			}
		}
	});
});