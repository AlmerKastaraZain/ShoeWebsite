
let onStart = () => {
    const passwordInputElement = document.getElementById('passwordInput');
    const confirmedPasswordInputElement = document.getElementById('confirmPasswordInput');
    
    const showPasswordBtnElement = document.getElementById('passwordShowBtn');

    showPasswordBtnElement.addEventListener('click', function() {
        if (passwordInputElement.type === 'password') {
            passwordInputElement.type = 'text';
            showPasswordBtnElement.src = "/icon/Eye.svg";
        } else {
            passwordInputElement.type = 'password';
            showPasswordBtnElement.src = "/icon/EyeClosed.svg"
        }
    });

    if (confirmedPasswordInputElement === null) {
        return;
    }

    const showConfirmPasswordBtnElement = document.getElementById('confirmPasswordShowBtn');
    showConfirmPasswordBtnElement.addEventListener('click', function() {
        if (confirmedPasswordInputElement.type === 'password') {
            confirmedPasswordInputElement.type = 'text';
            showConfirmPasswordBtnElement.src = "/icon/Eye.svg";
        } else {
            confirmedPasswordInputElement.type = 'password';
            showConfirmPasswordBtnElement.src = "/icon/EyeClosed.svg"; 
        }
    });
}

onStart();



