const logoutbtn = document.querySelector(".logout-btn") ;
const view_grievancesbtn = document.querySelector(".view_grievances-btn") ;

logoutbtn.addEventListener("click" , () =>{
    window.location.replace("index.html");
})
view_grievancesbtn.addEventListener("click" , () =>{
    window.location.replace("http://localhost/location2/index.php");
})