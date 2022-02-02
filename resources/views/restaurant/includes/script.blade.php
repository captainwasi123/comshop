
  <!-- footer  -->
<script src="{{URL::to('/public/restaurant/assets')}}/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="{{URL::to('/public/restaurant/assets')}}/js/popper.min.js"></script>
<!-- bootstarp js -->
<script src="{{URL::to('/public/restaurant/assets')}}/js/bootstrap.min.js"></script>
<!-- sidebar menu  -->
<script src="{{URL::to('/public/restaurant/assets')}}/js/metisMenu.js"></script>
<!-- waypoints js -->
<script src="{{URL::to('/public/restaurant/assets')}}/vendors/count_up/jquery.waypoints.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{URL::to('/public/restaurant/assets')}}/js/custom.js"></script>
<script src="{{URL::to('/public/restaurant/assets')}}/js/custom2.js"></script>
<script src="{{URL::to('/public/restaurant/assets')}}/js/dev.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API')}}&libraries=places"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>
<script type="text/javascript">
	$(document).ready(function(){
  $('.carousel').slick({
    speed: 400,
    slidesToShow: 8,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2500,
    dots:false,
    centerMode: false,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        // centerMode: true,

      }

    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        infinite: true,

      }
    },  {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
      }
    }]
  });
});

</script>
<script type="text/javascript">
	$(document).ready(function(){
  $('.carousel1').slick({
    speed: 400,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2500,
    dots:false,
    centerMode: false,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        // centerMode: true,

      }

    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,

      }
    },  {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
      }
    }]
  });
});

</script>