<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Meta -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="Anil z" name="author">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="keywords" content="">



    <!-- SITE TITLE -->

    <title>Kinchitkaram Trust</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <!-- Favicon Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.min.css" />
    <!-- Favicon Icon -->

    <link rel="shortcut icon" type="image/x-icon" href="{{ env('MAIN_URL') }}public/assets/images/favicon.png">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arvo">
    
    <style>
/*    .not-found {*/
/*    background: #631b1b;*/
/*}*/
        .page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif; margin-top: 4%;
    }
    html, body{
      margin: 0;
      padding: 0;
      text-align: center;
      font-family: sans-serif;
      background-color: #E7FFFF;
    }
    
    h1, a{
      margin: 0;
      padding: 0;
      text-decoration: none;
    }
    
    .section {
        padding: 4rem 2rem;
        background: linear-gradient(90deg, rgba(255, 178, 2, 1) 0%, rgba(255, 123, 0, 1) 15%, rgba(255, 165, 1, 1) 100%);
        border: 2px solid orange;
        border-radius: 20px;
        box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgb(0 0 0 / 13%);
    }
    
    .section .error {
        font-size: 150px;
        color: #bfbfbf;
        text-shadow: 1px 1px 1px #ffffff, 2px 2px 1px #ffffff, 3px 3px 1px #ffffff, 4px 4px 1px #ffffff, 5px 5px 1px #ffffff, 6px 6px 1px #ffffff, 7px 7px 1px #ffffff, 8px 8px 1px #ffffff, 25px 25px 8px rgba(0,0,0, 0.2);
    }
    
    .page{
      margin: 2rem 0;
      font-size: 20px;
      font-weight: 600;
      color: #fff;
    }
    
    .back-home {
        display: inline-block;
        border: 2px solid #c50909;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        padding: 0.75rem 1rem 0.6rem;
        transition: all 0.2s linear;
        box-shadow: 0 15px 15px -11px rgba(0,0,0, 0.4);
        background: #c50909;
        border-radius: 6px;
    }
    .back-home:hover {
    background: #ff9a01;
    border: 2px solid #fff;
}
    .jc-bs3-container.container {
        padding: 0 342px 0px 0px;
        text-align: justify;
    }
    </style>

</head>

<body>


    @include('include.header')

    <section class="page_404 mb-5">
        <div class="container not-found mb-5 text-center">
    	<div class="section mt-2 mb-2">
            @if(session('error'))
            <h1 class="error">403</h1>
            <div class="page">Ooops!!! {{ session('error') }}</div>
            @else
            <h1 class="error">404</h1>
            <div class="page">Ooops!!! The page you are looking for is not found{{ session('error') }}</div>
            @endif
          <a class="back-home" href="/">Back to home</a>
        </div>
        </div>
    </section>


    @include('include.footer')


    <div class="wats">

        <div class="wats2">

            <a href="https://api.whatsapp.com/send/?phone=%2B918754483776&amp;text&amp;app_absent=0"
                target="_blank"><img src="{{ env('MAIN_URL') }}public/assets/images/whatsapp.png"></a>
        </div>

    </div>

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>


</body>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

</html>
