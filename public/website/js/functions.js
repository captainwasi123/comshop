 $(document).ready(function(){


 	var val1 = 0;

 	$('.navbar-handler').children("img").click(function(){

 		if(val1==0){
 			$(this).attr("src","images/cross.png");
 		$('.navbar-custom').slideToggle();

 		val1 = 1;
 	
 	}
 	else {
 		$('.navbar-custom').slideToggle();
 		$(this).attr("src","images/hamburger.png");
 		val1 = 0;

 	}
 	});
 })





/*Sticky Header*/
 $(window).scroll(function() {
var $height1 = $(window).scrollTop();
if($height1 > 50) {
 $('body').addClass("header-fixed");

} else {
 $('body').removeClass("header-fixed");
}
});



 /*One Page Navigation*/
 jQuery(function($){
  var topMenuHeight = 100 ;
  $("#desktop-nav").menuScroll(topMenuHeight);
});

// COPY THE FOLLOWING FUNCTION INTO ANY SCRIPTS
jQuery.fn.extend({
    menuScroll: function(offset) {
    // Declare all global variables
        var topMenu = this;
    var topOffset = offset ? offset : 100;
        var menuItems = $(topMenu).find("a");
        var lastId;
  
    // Save all menu items into scrollItems array
        var scrollItems = $(menuItems).map(function() {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    // When the menu item is clicked, get the #id from the href value, then scroll to the #id element
        $(topMenu).on("click", "a", function(e){
            var href = $(this).attr("href");
            
            var offsetTop = href === "#" ? 100 : $(href).offset().top-10;

            $('html, body').stop().animate({ 
                scrollTop: offsetTop
            }, 300);
            e.preventDefault();

        });
    
    // When page is scrolled
        $(window).scroll(function(){
            var nm = $("html").scrollTop();
            var nw = $("body").scrollTop();
            var fromTop = (nm > nw ? nm : nw)+topOffset;

      
      // When the page pass one #id section, return all passed sections to scrollItems and save them into new array current
            var current = $(scrollItems).map(function(){
                if ($(this).offset().top <= fromTop)
                return this;
            });
      
      // Get the most recent passed section from current array
            current = current[current.length-1];
            var id = current && current.length ? current[0].id : "";
            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                $(menuItems)
                .parent().removeClass("active")
                .end().filter("[href='#"+id+"']").parent().addClass("active");
            }      

        });
    }
});
