function validatePassword() {
    let password = document.getElementById("my-password").value;
    let confirmPassword = document.getElementById("my-password-confirm").value;

    if (password !== confirmPassword) {
        alert("Пароли не совпадают!");
        return false;
    }

    if (password.length <= 5 || confirmPassword.length <= 5) {
        alert('Пароль должен быть больше 5 символов!');
        return false;
    }
    return true;
}