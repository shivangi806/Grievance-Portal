const form = document.querySelector("form");

form.addEventListener("submit" , (e) =>{

    e.preventDefault();
    const username = form.username.value;
    const password = form.password.value;
    const authenticated = authentication(username,password);
    if(authenticated){
        window.location.href = "http://localhost/login-signup/assignofficer.php";
    }
    else{
        alert("incorrect");
    }
})


// for checking valid username or password 
function authentication(username ,  password){
    if(username=="Mansha" && password=="pswd@1234") return 1;
    else if(username=="Ayashika" && password=="pswd@1234") return 1;
    else if(username=="Aynansh" && password=="pswd@1234") return 1;
    else if(username=="Shresth" && password=="pswd@1234") return 1;
    else if(username=="Shivangi" && password=="pswd@1234") return 1;
    return 0;
}