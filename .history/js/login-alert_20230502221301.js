if(!document.querySelector('.login-message')) {
    return;
}
    const loginAlert = document.querySelector('.login-message').html();
    document.querySelector('.login-message').remove();
    document.querySelector('.alert-message').html(`${loginAlert}`);