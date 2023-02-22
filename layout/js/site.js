// a simple function that triggers alert box

function hello(){
    alert("Welcom to my website");
}



// a simple function to add 2 numbers
function add(){
    document.write(5+6);
}



//document.getElementById(id)
//display 


//function to change the font color of the page
function changeFcolor(){
let fcolor = document.getElementById('fcolor').value;
document.body.style.backgroundColor = newColor;
}

//function to change the background color of the page
function changeColor(where,newColor){
    if (where == "background"){
    document.body.style.backgroundColor = newColor;
    }
}

