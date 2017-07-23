$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
  
  var modalUniqueClass = ".modal";
  $('.modal').on('show.bs.modal', function(e) {
	var $element = $(this);
	var $uniques = $(modalUniqueClass + ':visible').not($(this));
	
	if ($uniques.length) 
	{
		$uniques.modal('hide');
		$uniques.one('hidden.bs.modal', function(e) {
			$element.modal('show');
		});
		return false;
	}
  });
  
  
   $("#btn-wish").on("click", function(){
	   var str_wish = $("#txt-wish").val();
	   $("#jobTitle").val( str_wish );
   });
   
   $('.continue').click(function(){
	$('.nav-tabs > .active').next('li').find('a').trigger('click');
   });
	
   $('.back').click(function(){
	$('.nav-tabs > .active').prev('li').find('a').trigger('click');
   });
   
   $("#placeOrder").on("click", function(){
	   $(location).attr('href', 'pages/main.php');
   });
});