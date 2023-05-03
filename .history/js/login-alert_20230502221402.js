if(document.querySelector('.login-message')) {
    const loginAlert = document.querySelector('.login-message');
    document.querySelector('.login-message').remove();
    document.querySelector('.alert-message').html(`${loginAlert}`);
}
    