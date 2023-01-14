function onChange() {
    const password = document.querySelector("#password");
    const confirm = document.querySelector("#confirm_password");
    if (confirm.value === password.value) {
      confirm.setCustomValidity("");
    } else {
      confirm.setCustomValidity("Пароль не совпадает");
    }
  }