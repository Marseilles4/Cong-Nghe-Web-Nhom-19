var btn = document.getElementById('btn');
var btn1 = document.getElementById('btn1');

function Toggle(){
    if(btn.classList.contains("far")){
        btn.classList.remove("far");
        btn.classList.add("fas");
    }
    else{
        btn.classList.remove("fas");
        btn.classList.add("far");
    }
}

function Menu(){
    var menu = document.getElementById("menu-profile");
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  }