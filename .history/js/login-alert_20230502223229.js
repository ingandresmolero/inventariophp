if(document.querySelector('.login-message')) {
    const alertMessage = document.querySelector('.alert-message');
    const loginText = document.querySelector('.login-message');
    loginText.remove();
    alertMessage.innerHTML= loginText;
}