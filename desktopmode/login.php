<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="../logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdvenTour Time!</title>
    
  </head>
<body ondrag ="false" id="body"> 
  <!-- put php on a new file, not here. Name the file register.php-->
  <!-- LOGIN box -->
  <div class="content">  
    <div id="BOX">
      <img src="/logo.png" alt="" id="transitionOL" ondrag ="false">
      <div class="toggle" id="toggle">
        <button class="login" id="LOGIN">LOGIN</button><button class="login" id="SIGNUP">SIGNUP</button>
      </div>
      <div id="FORMS">
        <form action="" id="loginForm" method ="POST" action="register.php"> 
          <!-- change register.php to your filename. CASE SENSITIVE. -->
          <ul>
            <li style="margin-bottom:45px; margin-top: 105px; padding: 3px;"><input type="email"; placeholder="E-mail" name="E-mail" id="USERNAME" class="input"></li>
            <li style="margin-bottom:45px"><input type="text"; placeholder="name" id="name" class="input"></li>    
            <hr style="margin-bottom: 10px; margin-top: 10px;">
            <li><input type="submit" value="LOGIN" class="login" id="myButton">LOGIN</button></li>
          </ul>
        </form>
        <script type="text/javascript">
            document.getElementById("myButton").onclick = function () {
                window.location.replace( "../contents.php");
            };
        </script>
        <form action="" id="registerForm">
          <ul>
            <li style="margin-bottom:45px;"><input type="text" placeholder="Username" id="USERNAME" class="input"></li>
            <li style="margin-bottom:45px;"><input type="Password" placeholder="Password" id="PASSWORD" class="input"></li>    
            <li style="margin-bottom:45px;"><input type="Password" placeholder="Confirm Password" id="PASSWORD" class="input"></li>    
            <li style="margin-bottom:45px;"><input type="email"placeholder="E-mail" id="E-mail" class="input"></li>
            <hr style="margin-bottom: 10px; ">
            <li><button id="myButton"class="login">SIGNUP</button></li>
          </ul>
        </form>
      </div>
    </div>
  </div>
  <script src="./signup.js"></script>
</body>
</html>
