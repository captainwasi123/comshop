<!DOCTYPE html>
<html>
<head>

    <title> Login | {{env('APP_NAME')}} </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="{{URL::to('/public/restaurant/assets')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{URL::to('/public/restaurant/assets')}}/css/style.css" />
    <link rel="stylesheet" href="{{URL::to('/public/restaurant/assets')}}/css/custom.css" />
    <link rel="stylesheet" href="{{URL::to('/public/restaurant/assets')}}/css/bazil-css.css" />

<style type="text/css">
.sec-2-back {
    background-image: url('{{URL::to('/public/restaurant/assets')}}/images/image2.png');
}
</style>
</head>

<body class="crm_body_bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 no-pad">
                <div class="sec-1">
                    <img src="{{URL::to('/public/restaurant/assets')}}/images/image1.png" width="45%"> 
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 sec-2-back">
                <div class="sec-2">
                    <h2 class="no-margin pad-bot-20"> RESTAURANT PANEL </h2>
                    <h3 class="no-margin"> LOGIN </h3>
                    <div class="white_card_body">     
                        <form action="" method="POST">
                        @csrf               
                            <div class="form-group sec-3 no-margin pad-top-30 pad-bot-60">
                                <i class="fa fa-user icon"></i>
                                <input type="email" class="form-control" name="email" id="inputText" placeholder="Email">
                                <i class="fa fa-lock icon"></i>
                                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
                                <h4 class="no-margin pad-top-20">Forgot password?</h4>
                            </div>
                            <div class="form-group sec-3-btn no-margin">
                                <input type="submit" class="bg-yellow" name="login" value="LOGIN">              
                            </div> 
                        </form>        
                    </div>   
                </div>
            </div>      
        </div>
    </div>
           
    <script src="{{URL::to('/public/restaurant/assets')}}/js/jquery-3.4.1.min.js"></script>
    <script src="{{URL::to('/public/restaurant/assets')}}/js/popper.min.js"></script>
    <script src="{{URL::to('/public/restaurant/assets')}}/js/bootstrap.min.js"></script>
    <script src="{{URL::to('/public/restaurant/assets')}}/js/custom.js"></script>
  
</body>
</html>