<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <!--
        Supersized - Fullscreen Slideshow jQuery Plugin
        Version : 3.2.7
        Site    : www.buildinternet.com/project/supersized
        
        Author  : Sam Dunn
        Company : One Mighty Roar (www.onemightyroar.com)
        License : MIT License / GPL License
    -->

    <head>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.css') }}">
        <title>Pemilu KMTETI 2015</title>
        <link rel="SHORTCUT ICON" href="{{ URL::asset('img/favicon.ico') }}">
        
        <link rel="stylesheet" href="{{ URL::asset('css/supersized.css') }}" type="text/css" media="screen" />
        <link rel="stylesheet" href="{{ URL::asset('css/supersized.shutter.css') }}" type="text/css" media="screen" />
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>   
        <script type="text/javascript" src="{{ URL::asset('js/supersized.3.2.7.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/supersized.shutter.min.js') }}"></script>

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('style.css') }}">
        
        <script type="text/javascript">
            
            jQuery(function($){
                
                $.supersized({
                
                    // Functionality
                    slide_interval          :   900000,       // Length between transitions
                    transition              :   1,          // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed        :   1000,        // Speed of transition
                                                               
                    // Components                           
                    slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides                  :   [           // Slideshow Images
              {image : '{{ URL::asset('assets/body-bg-3.jpg') }}', title : 'Blablabla'},
              {image : '{{ URL::asset('assets/body-bg-3.jpg') }}', title : 'Blablabla'}
                                                        
                                                ]
                    
                });
            });
            
        </script>
        
    </head>

<body>
    <div class="container">

       

        <div class="row" style="margin-top:200px;">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                <img src="{{ URL::asset('assets/kmtetilogoputih.png') }}"  width="120px;">
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel" style="background-color: transparent;">
                    <div class="panel-body" style="padding: 55px;">
                        <form id="login" method="post" action="<?php echo asset('vote'); ?>" role="form" autocomplete="off">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="NIM 5 Digit" type="username" name="nim" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password" name="password" value="" >
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input value="Login" type="submit" class="btn btn-lg btn-vote2 mrg-top-30" style="margin-left:20px; width: 150px; margin-left: 50px;"></input>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</body>
</html>

<!--<html>
    <body>
        <form id="login" method="post" action="">
            <input type="text" name="nim"/>
            <input type="password" name="password"/>
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>-->