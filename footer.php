<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package D&M
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row footer">
			<div class="col-xs-offset-1 col-xs-4 col-sm-offset-2 col-sm-2 left-footer">
				<h5 class="footer-heading"><b>Find out More</b></h5>
				<a class="footer-links">Home</a><br/>
				<a class="footer-links">About</a><br/>
				<a class="footer-links">Services</a><br/>
				<a class="footer-links">Resources</a><br/>
				<a class="footer-links">Portal</a><br/>
				<a class="footer-links">Contact</a><br/>
			</div>
			<div class="col-sm-4 icon-div hidden-xs">
				<i class="fa fa-facebook footer-icon"></i>
				<i class="fa fa-google-plus footer-icon"></i>
				<i class="fa fa-twitter footer-icon"></i>
				<i class="fa fa-youtube footer-icon"></i>
			</div>
			<div class="col-xs-6 col-sm-3 right-footer">
				<h5 class="footer-heading"><b>D&amp;M Enterprise Group</b></h5>
				<span id="address">
				88 West Front Street, Keyport,<br/>
				NJ 07735<br/>
				E:info@DMenterprise.net<br/>
				T:888-357-5055<br/>
				F:732-335-5523<br/>
				</span>
			</div>
		</div>
		<div class="row text-center">
		 Copyright &copy; 2014 &middot; D&amp;M Enterprise Group
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
	
	$('#testimonial-carousel').carousel({
  		interval: 100000000
	});

	$('#supplier-carousel').carousel({
  		interval: 100000000
	});

	var screen_width = $(window).width(); 
	
	if($(window).width() >= 768){
		$('#testimonial-carousel .item').each(function(){
		  var next = $(this).next();
		  if (!next.length) {
		    next = $(this).siblings(':first');
		  }
		  next.children(':first-child').clone().appendTo($(this));  		  
		});
	}

	$(window).resize(function() {
	 //  if ($(window).width() <= 768 && screen_width > 768) {
	 //    $('.carousel .content').each(function(){
		//   var next = $(this).next();
		//   if (!next.length) {
		//     next = $(this).siblings(':first');
		//   }
		//   next.children(':first-child').clone().appendTo($(this));  		  
		// });
	 //  }
	  // else 
	 //  console.log(screen_width);
	 //  console.log($(window).width());
	 //  console.log($(window).width() >= 768 && screen_width < 768);
	 //  if($(window).width() >= 768 && screen_width < 768){
	 //  	$('.carousel .item').each(function(){
		//   var next = $(this).next();
		//   console.log(next);
		//   if (!next.length) {
		//     next = $(this).siblings(':first');
		//   }
		//   next.children(':first-child').clone().appendTo($(this));  		  
		// });
	 //  }
	  screen_width = $(window).width();
	  setCarouselHeight('#testimonial-carousel');
	  // setCarouselHeight('#supplier-carousel');
	});

	setCarouselHeight('#testimonial-carousel');
	// setCarouselHeight('#supplier-carousel');

    function setCarouselHeight(id)
    {
    	if(id == "#testimonial-carousel"){
    		$(id).css('height','auto');
	    	 $(id+' .testimonial-card').each(function()
	        {	
	        	$(this).css('height','auto');
	        });
	        var slideHeight = [];
	        $(id+' .item').each(function()
	        {	
	            // add all slide heights to an array
	            slideHeight.push($(this).height());
	        });

	        // find the tallest item
	        max = Math.max.apply(null, slideHeight);

	        $(id+' .testimonial-card').each(function()
	        {
	            // add all slide heights to an array
	            $(this).css('height',(max)+'px');
	        });
	        $(id).css('height',(max+50)+'px');
    	}
    	// else{
    	// 	$(id).css('height','auto');
	    // 	 $(id+' .testimonial-card').each(function()
	    //     {	
	    //     	$(this).css('height','auto');
	    //     });
	    //     var slideHeight = [];
	    //     $(id+' .item').each(function()
	    //     {	
	    //         // add all slide heights to an array
	    //         slideHeight.push($(this).height());
	    //     });
	        
	    //     console.log($('.supplier-content').height());
	    //     console.log(Math.max.apply(null, slideHeight));

	    //     slideHeight.push($('.supplier-content').height());

	    //     // find the tallest item
	    //     max = Math.max.apply(null, slideHeight);

	    //     $(id+' .testimonial-card').each(function()
	    //     {
	    //         // add all slide heights to an array
	    //         $(this).css('height',(max)+'px');
	    //     });
	    //     $(id).css('height',(max+50)+'px');	
    	// }
    }

	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    console.log(x.className);
	    if (x.className === "topnav non-responsive") {
	        x.className = "topnav responsive";
	    }
	    else {
	        x.className = "topnav non-responsive";
	    }
	}
</script>
</html>
