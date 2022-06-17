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
    })
 })


 $(document).ready(function(){
 /*Countdown Timer*/
 (function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "06/30/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          
        }
        //seconds
      }, 0)
  }());

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
