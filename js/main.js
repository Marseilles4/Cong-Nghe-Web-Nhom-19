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

function Toggle1(){
    if(btn1.classList.contains("far")){
        btn1.classList.remove("far");
        btn1.classList.add("fas");
    }
    else{
        btn1.classList.remove("fas");
        btn1.classList.add("far");
    }
}