if(document.querySelector('.login-message')) {
    const alertMessage = document.querySelector('.alert-message');
    const loginText = document.querySelector('.login-text');
    login-message.remove();
    alertMessage.innerHTML= loginText;
}