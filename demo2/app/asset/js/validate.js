function validateRegister() {
  let name = document.getElementById("username").value;
  let phone = document.getElementById("phone").value;
  let password = document.getElementById("password").value;

  let nameError = document.getElementById("nameError");
  let phoneError = document.getElementById("phoneError");
  let passwordError = document.getElementById("passwordError");

  let check = true;

  if (name == "") {
    nameError.innerText = "Vui lòng nhập vào tên của bạn";
  } else if (name.length < 8) {
    nameError.innerText = "Tên phải có ít nhất 8 ký tự";
    check = false;
  }

  if (phone == "") {
    phoneError.innerText = "Vui lòng nhập vào SĐT của bạn";
    check = false;
  } else if (!/^\d{10}$/.test(phone)) {
    phoneError.innerText = "SĐT phải có 10 chữ số";
    check = false;
  }

  if (password == "") {
    passwordError.innerText = "Vui lòng nhập vào mật khẩu";
    check = false;
  } else if (password.length < 8) {
    passwordError.innerText = "Mật khẩu phải có ít nhất 8 ký tự";
    check = false;
  }

  return check;
}

