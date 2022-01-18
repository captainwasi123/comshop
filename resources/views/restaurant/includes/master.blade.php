<!DOCTYPE html>
<html>
   <head>
   <title> @yield('title') | {{env('APP_NAME')}} </title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">
      <link rel="icon" href="img/logo.png" type="image/png">
      
      @yield('meta')
      
      @include('restaurant.includes.style')
      @yield('addStyle')

   </head>
   <!-- <div id="websiteOverlay"><div class="loader"></div></div> -->
   <body class="crm_body_bg">
      
      <!-- Header Section Starts Here -->
      @include('restaurant.includes.sidebar')
   
      <section class="main_content dashboard_part default_content" >
      @include('restaurant.includes.header')
      <!-- Header Section Ends Here -->

      @yield('content')

      </section>
         @include('restaurant.includes.script')

         @yield('addScript')
   </body>
</html>