$(document).ready(function() {
 // Scroll to section
 $(document).ready(function(){
    $(".navbar_link").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 800, function(){
            window.location.hash = hash;
            });
        }
        });
    });
    // End scroll to section

     //Scroll to top
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('#btnTop').fadeIn();
		} else {
			$('#btnTop').fadeOut();
		}
	});
	
    	//Click event to scroll to top
	$('#btnTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
    // End Scroll to top
});

