const form = document.querySelector('form');
const fullName = document.getElementById('name');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const subject = document.getElementById('subject');
const mess = document.getElementById('message');
function sendEmail(){
    const bodyMessage = `Nombre completo: ${fullName.value}<br> Email: ${email.value}<br>
    Numero de telefono: ${phone.value}<br>Mensaje: ${mess.value}<br>`;
    Email.send({
        /*SecureToken : "57482e03-a222-41c2-bee4-f1bec97a56b7.",*/
        Host : "smtp.elasticemail.com",
        Username : "joel.cba82@gmail.com",
        Password : "73206A49EC77963DCFEDF64A3F78AF4FA125",/**/
        To : 'joel.cba82@gmail.com',
        From : "joel.cba82@gmail.com",
        Subject : subject.value,
        Body : bodyMessage
    }).then(
      message => {
        if (message == "OK"){
            Swal.fire({
                title: "Mensage Enviado!",
                text: "Presione OK",
                icon: "success"
              });
        }
      }
    );
}

function checkInputs(){
    const items = document.querySelectorAll(".item") ;
    for (const item of items){
        if (item.value == "") {
            item.classList.add("error");
            item.parentElement.classList.add("error");
        }
        if(items[1].value !=""){
            /*console.log(items[1])
            console.log("OK")*/
            checkEmail();
        }
        items[1].addEventListener("keyup" , ()=>{
            checkEmail();
        })
        


        item,addEventListener("keyup", ()=>{
            if (item.value != ""){
                item.classList.remove("error");
                item.parentElement.classList.remove("error");
            }
            else{
                item.classList.add("error");
                item.parentElement.classList.add("error");
            }
        })
    }   
}
function checkEmail(){
    const emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    const errorTxtEmail = document.querySelector(".error-txt.email");
    if (!email.value.match(emailRegex)){
        email.classList.add("error");
        email.parentElement.classList.add("error")
    
        if (email.value != ""){
            errorTxtEmail.innerText ="ingresa un email valido";
        }
        else{
            errorTxtEmail.innerText ="ingresa un email";
        }
    }
    else {
        email.classList.remove("error");
        email.parentElement.classList.remove("error")
    }
}
form.addEventListener("submit" , (e)=> { 
    e.preventDefault();
    checkInputs();

    if (!fullName.classList.contains("error") && !email.classList.contains("error") && !phone.classList.contains("error") && !subject.classList.contains("error") && !mess.classList.contains("error")){
        console.log("OK");
        sendEmail();

        form.reset();
        return false;
    }

    //sendEmail();
});
