if(!document.querySelector('.alert-message').length) return;
    const loginAlert = document.querySelector('.alert-message').html();
    document.querySelector('.alert-message').remove();
    document.querySelector('.alert-message').html(`${loginAlert}`);