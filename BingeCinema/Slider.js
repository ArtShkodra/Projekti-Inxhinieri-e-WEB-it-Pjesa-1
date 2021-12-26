window.onload = sliderFunction();

function sliderFunction(){
    var sliderList = document.getElementsByClassName('slider-content');

    if(!sliderList[0].classList.contains('show-content')){
        sliderList[0].classList.add('show-content');
    }

    for(var slide of sliderList){
        if(!slide.classList.contains('show-content')){
            slide.classList.add('hidden-content');
        }
    }

    var index = 0;
    var slider = document.getElementsByClassName('slider')[0];

    slider.addEventListener('click', function(){
        index++;
        for(var slide of sliderList){
            if(slide.classList.contains('show-content') && index <3 ){
                slide.classList.remove('show-content');
                slide.classList.add('hidden-content');
                slide.nextElementSibling.classList.remove('hidden-content');
                slide.nextElementSibling.classList.add('show-content');
                break;
            } else if(slide.classList.contains('show-content') && index == 3){
                slide.classList.remove('show-content');
                slide.classList.add('hidden-content');
                slide.previousElementSibling.previousElementSibling.classList.remove('hidden-content');
                slide.previousElementSibling.previousElementSibling.classList.add('show-content');
                index = 0;
                break;
            }
        }
    })
}

var signin = document.getElementById("Poz5");

signin.addEventListener("click" , function(event){
    var username = document.getElementById("Poz2").value;
    var password = document.getElementById("Poz4").value;


    var usernameRegex = /^[A-Z]\w+[.-_]?\w+/;
    var passwordRegex = /^[A-Z]\w+[.-_]?\w+/;

    if(username == ""|| username ==  null || password == "" || password || null){
        alert("Fill Username or Password");
        event.preventDefault();
        }else{
            if(usernameRegex.test(username) || passwordRegex.test(password)){

            }else{
                alert("Username or Password Error");
                event.preventDefault();
            }
        }
        console.log("Username : " + username);
        console.log("Password : " + password);

})

var signup = document.getElementById("Poz5");

signup.addEventListener("click" , function(event){
    var name = document.getElementById("Poz7").value;
    var surname = document.getElementById("Poz9").value;
    var uusername = document.getElementById("Poz11").value;
    var phonenumber = document.getElementById("Poz13").value;
    var email = document.getElementById("Poz15").value;
    var ppassword = document.getElementById("Poz17").value;


    var usernameRegex = /^[A-Z]\w+[.-_]?\w+/;
    var passwordRegex = /^[A-Z]\w+[.-_]?\w+/;
    var nameRegex = /^[a-zA-Z\s]+$/;
    var surnameRegex = /^[a-zA-Z\s]+$/;
    var phonenumberRegex = [0-9] ;
    var emailRegex = /^[A-Z]\w+[.-_]?\w+/;

    if(name == ""|| name ==  null || surname == "" || surname || null || uusername == "" || uusername == null || phonenumber == "" || phonenumber == null || email == "" 
                || email == null || ppassword == "" || ppassword == null){
        alert("Fill Username,Password,Name,Surname,PhoneNumber,Email");
        event.preventDefault();
        }else{
            if(usernameRegex.test(uusername) || passwordRegex.test(ppassword) || nameRegex.test(name) || surnameRegex.test(surname) || phonenumberRegex.test(phonenumber) || emailRegex.test(email)){

            }else{
                alert("Username,Password,Name,Surname,PhoneNumber or Email Error");
                event.preventDefault();
            }
        }
        console.log("Name : " + name);
        console.log("Surname : " + surname);
        console.log("Username : " + uusername);
        console.log("PhoneNumber : " + phonenumber);
        console.log("Email : " + email);
        console.log("Password : " + ppassword);

})