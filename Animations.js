//hover ID
var Home = document.getElementById("Options-Home");
var Discover =  document.getElementById("Options-Discover");
var About = document.getElementById("Options-About");
var img_home =document.getElementById("Options-img");
//hover animations
Home.addEventListener("mouseover",function(){
    Discover.style.width = "183px";
    About.style.width="183px";
    Home.style.width = "16vw";
})
Discover.addEventListener("mouseover",function(){
    Discover.style.width = "16vw";
    Home.style.width="183px";
    About.style.width="183px";
})
About.addEventListener("mouseover",function(){
    About.style.width = "16vw";
    Discover.style.width = "183px";
    Home.style.width = "183px";
    
})
Home.addEventListener("mouseout",reset)
Discover.addEventListener("mouseout",reset)
About.addEventListener("mouseout",reset)
function reset(){
    Discover.style.width = "183px";
    Home.style.width="183px";
    About.style.width="183px"

}
//browser change resolution
window.addEventListener("resize", function(event) {
    const options = document.getElementById("Options");
    const buttons = document.getElementById("buttons");
    if(document.body.clientWidth > 1266){
        options.style.opacity = "1";
        buttons.style.display= "inherit";
        buttons.style.marginTop= "-80px";
        buttons.style.marginRight= "10px";
        buttons.style.float = "right";
    }
    else{
    buttons.style.display   = "block";         
    buttons.style.float = "none";
    buttons.style.marginTop= "0px";
    buttons.style.marginLeft= "127px";
    options.style.opacity= "0";
    }
})
//  progress  maker
window.onscroll = function(){
    const winscroll = document.body.scrollTop|| document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled =( winscroll/height) *100;
    const progress = document.getElementById("progress");
    const header  = document.getElementById("Header");
    progress.style.width = scrolled + "%";

}