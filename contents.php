<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Adventour Time</title>
    <link rel="icon" href="../logo.png">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<script src="jquery-3.6.min.js"></script>
    <div class = "optionPancake">
    <i class="fa fa-bars"  id="open"></i>
        <i class="fa fa-close" id="close"></i>
        </div>
    <div class="Header" id="Header">
        <div class = "Options" id="Options">
            <ul>
                <li><a href="" class= "aBtn1" style = "background-color: transparent;" id="Options-img"><img src="./logo.png" alt=""></a></li>
                <li><a href="" class= "aBtn"style="padding:1.7rem;" id="Options-Discover">Discover</a></li>
                <li><a href="" class= "aBtn"style="padding:1.7rem;" id="Options-Home">Home</a></li>
                <li><a href="" class= "aBtn"style="padding:1.7rem;" id="Options-About">About</a></li>   
                <a class="button" id="buttons" style="padding:1.7rem;" href="#popup1">logout</a>
            </ul>
        </div>
        <!-- checking if header is visible in screen -->
        <script>
            var $window = $(window);
            var contentTop = $("#Options").offset().top;
            var contentStart = contentTop - $window.height();
            var contentEnd = contentTop + $("#Options").height();
            var i = 130;
            $window.scroll(function() {
            var scrollTop = $window.scrollTop();
            if (scrollTop > contentStart && scrollTop > contentEnd) {
                $("#progress").css({"position" : "fixed", "top" : "0px"});
            }else {
                $("#progress").css({"position": "inherit", });
            } 
            });
        </script>
        <!-- For mobile -->
        <script>
            var options = document.getElementById("Options");
            var open= document.getElementById("open");
            var close =  document.getElementById("close");
                open.addEventListener("click", function(){
                options.style.opacity="1";
                open.style.display="none";
                close.style.display="block";

            });
            close.addEventListener("click", function(){
                options.style.opacity = "0";
                open.style.display="block";
                close.style.display="none";
            })
        </script>
    </div>
    <div class = "progress-indicator" id="progress">
        
    </div>
    <!-- POPUP  -->
    <div id="popup1" class="overlay">
	<div class="popup">
		<h2>Are you sure?</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			LOGOUT form. put here.
		</div>
	</div>
</div>
    <script src="Animations.js"></script>
    <div class="content" id="content">
        <!-- vvvvvvvvvvvvvvvvvvvvvvvv PUT YOUR CODE HERE. vvvvvvvvvvvvvvvvvv -->
        
    </div>
</body>
</html>