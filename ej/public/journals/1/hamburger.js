function hamburger(){
    
    if (document.getElementById('navbar').className == "menuClose"){
        document.getElementById("navbar").className = "menuOpen";
    }else{
        document.getElementById("navbar").className = "menuClose";
    }
}