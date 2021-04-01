    var RY = window.innerHeight;
    var RX = window.innerWidth;
    var signup = document.getElementById("SIGNUP");
    var login =  document.getElementById("LOGIN");
    var RF = document.getElementById("registerForm");
    var LF = document.getElementById("loginForm");
    var OL = document.getElementById("transitionOL");
    var body = document.getElementById("body");
    var forms = document.getElementById("FORMS");
    var box = document.getElementById("BOX");
    var loginBut = document.getElementById("RDbtn1");
    login.addEventListener("mouseover", ANIMATIONSTART01);
    login.addEventListener("mouseout", ANIMATIONEND01);
    signup.addEventListener("mouseover", ANIMATIONSTART02);
    signup.addEventListener("mouseout", ANIMATIONEND01);
    login.addEventListener("click", containersize);
    signup.addEventListener("click", containersize01);
    loginBut.addEventListener("click", checklogin);
    window.onload = Start;
function ANIMATIONSTART01(){
    signup.style.width ="20%";
    login.style.width = "80%";
    signup.style.display =  "fixed";
    login.style.display =  "fixed";
}
function ANIMATIONSTART02(){
    login.style.width ="20%";
    signup.style.width = "80%";
}
function ANIMATIONEND01(){
    login.style.width ="50%";
    signup.style.width ="50%";
}
function RDbtn01(){
    RDbtn.style.width = "100";
    RDbtn1.style.width = "100";
}

signup.onclick= function() {
    RF.style.left='-200px';
    RF.style.opacity='1';
    LF.style.left='-3000px';
    LF.style.opacity='0';
    signup.classList.add('active');
    login.classList.remove('active');

}
login.onclick = function(){
    LF.style.left='-200px';
    LF.style.opacity='1';
    RF.style='500px';
    RF.style.opacity='0';

}
function redirect(){
    window.location.href = "signup.html";
}
function Start(){
    OL.style.opacity = '1';
    document.getElementById("BOX").style.opacity = '1';
    forms.style.height = (RX*0.3) + 'px'; 
}
function containersize(){
    box.style.marginTop = "100px";
    box.style.height = "380px";
}
function containersize01(){
    box.style.marginTop = "10px"
    box.style.marginBottom = "150px";
    box.style.height = "600px";
}
function checklogin(){
    window.location = "./check";
    window.location.replace("./baseline/index.html");
}
