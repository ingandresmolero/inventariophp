if(document.querySelector('.login-message')) {
    const loginAlert = document.querySelector('.login-message');
    const alertMessage = document.querySelector('.login-message');
    document.querySelector('.login-message').remove();
    //document.querySelector('.alert-message').innerHTML="<div class='alert-message'>"+loginAlert +"</div>";
    loginAlert.appendChild(oldParent.childNodes[0]);
}
    