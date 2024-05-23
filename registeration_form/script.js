const password = document.querySelector('#password');
const confpass = document.querySelector('#confpass');
const helppass = document.querySelector ('#helppass')
const regbtn   = document.querySelector('#regbtn');

password.addEventListener('keyup',function(){
    let passlngth = password.value;
    if(passlngth.length>=8){
        confpass.removeAttribute("disabled");
    }
    else{
        confpass.setAttribute("disabled", true);

    }
    passmatch()
    // checkpw();
   
});
confpass.addEventListener('keyup', function(){
    // checkpw();
    passmatch();
    
});


// helppass.addEventListener('keyup', functio(){
//     passmatch();
    
// });


// regbtn.addEventListener('keyup', function(){
//     passmatch();
// });


 function passmatch(){
      let pass = password.value;
      let confirmpass = confpass.value;
      if(pass == confirmpass){
        helppass.innerHTML = "Password Matched";
        regbtn.removeAttribute("disabled");
        helppass.classList.remove("text-danger");
        helppass.classList.add("text-success");

      }
      else{
        helppass.innerHTML = "Password Doesn't Matched";
        regbtn.setAttributeAttribute("disabled",true);
        helppass.classList.remove("text-success");
        helppass.classList.add("text-danger");
      }
};

const eye =document.querySelector("#eye");

eye.addEventListener('click',function(){
 if (password.type == "password"){
    password.setAttribute("type", "text");
    eye.classList.remove("bi-eye");
    eye.classList.add("bi-eye-slash");
 }

 else{
    password.setAttribute("type", "password");
    eye.classList.add("bi-eye");
    eye.classList.remove("bi-eye-slash");
 }
});



