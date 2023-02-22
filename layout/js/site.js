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

//crud
function crud(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length <5)
    alert("First Name must have atleast 5 chsracter");
    return false;
}


function fname(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length <5)
    alert("First Name must have atleast 5 chsracter");
    return false;
}

//example of realtime input validation 
function cname(){
    let name=document.myform.name.value;  
    // to check if name is empty of not  
    if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
    }
    // to check if name has atleast 5 characters
    else if(name.length<5){  
        alert("Name can't less than 5 characters");  
        return false;  
      }
    // // to ensure name cannot be more than 5 characters
    else if(name.length>15){  
        alert("Name can't more than 15 characters");  
        return false;  
      }
    }