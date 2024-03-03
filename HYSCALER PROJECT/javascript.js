function display_login (){
    let division=document.getElementById("login_body")
    division.style.display="block"
}
function close_form(){
    let division=document.getElementById("login_body")
    division.style.display="none"
}

let user_Data=[
    {
        user_mail:"user1@gmail.com",
        password:"12345"
    },
    {
        user_mail:"user2@gmail.com",
        password:"123"
    },
    {
        user_mail:"user3@gmail.com",
        password:"12"
    }
]
function form_data(){
    let email=document.getElementById("email").value
    let password=document.getElementById("password").value
    console.log(email,password);
    // user_Data.push(email,password)
    setTimeout(()=>{
        user_Data.map((ele)=>{
            if(ele.user_mail===email&&ele.password===password){
                 alert("you are sucessfully login");
                window.location.replace('http://127.0.0.1:5500/Admin.html')
            }
         })
    },1000)
   
}
// let reg_data=[

// ]
function reg_data(){
    let email=getElementById("email").value
    let password=document.getElementById("password").value
    let confirmpassword= document.getElementById("password").value
    let dob=document.getElementById("dob").value
    let gender=document.getElementById("gender").value
    setTimeout(()=>{
        reg_data.map((ele)=>{
            alert("You are sucessfully registered");
            window.location.replace('http://127.0.0.1:5500/newRegisterpage.html')
        })
    },)

    }
