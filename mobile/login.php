<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript test login</title>
  </head>
<body ondrag ="false" id="body"> 
  <!-- LOGIN box -->
  <div class="content">  
    <div id="BOX">
      <h1 id="transitionOL">WELCOME</h1>
      <div class="toggle" id="toggle">
        <button class="login" id="LOGIN">LOGIN</button><button class="login" id="SIGNUP">SIGNUP</button>
      </div>
      <div id="FORMS">
        <form action="" id="loginForm">
          <ul>
            <li style="margin-bottom:45px; margin-top: 105px; padding: 3px;"><input type="text"; placeholder="Username" id="USERNAME" class="input"></li>
            <li style="margin-bottom:45px"><input type="Password"; placeholder="Password" id="PASSWORD" class="input"></li>    
            <hr style="margin-bottom: 10px; margin-top: 10px;">
            <li><button id="myButton"class="login">LOGIN</button></li>
          </ul>
        </form>
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
        <script type="text/javascript">
            document.getElementById("myButton").onclick = function () {
                window.location.replace( "../contents.php");
            };
        </script>
      </div>
    </div>
  </div>
  <script src="signup.js"></script>
</body>
</html>
