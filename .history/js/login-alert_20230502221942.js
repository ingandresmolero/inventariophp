if (document.querySelector('.login-message')) {
    const loginAlert = document.querySelector('.login-message');
    document.querySelector('.login-message').remove();
    const alertMessage = document.createElement('div');
    alertMessage.classList.add('alert-message');
    alertMessage.innerHTML = loginAlert.innerHTML;
    document.querySelector('.alert-message-container').appendChild(alertMessage);
  }