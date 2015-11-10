function myFunction(){
    
    if (document.getElementById('menu').className == "menuClose"){
        document.getElementById("menu").className = "menuOpen";
    }else{
        document.getElementById("menu").className = "menuClose";
    }
}