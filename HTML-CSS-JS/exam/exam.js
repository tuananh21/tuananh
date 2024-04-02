function validateForm() {
    let name = document.getElementById("username").value;
    let email = document.getElementById("email-address").value;
    let phone = document.getElementById("phone-number").value;
    let password = document.getElementById("password").value;
    let retype = document.getElementById("retype").value;

    if (name == "") {
        let nameError = document.getElementById("nameError");
        nameError.innerText = "Vui long nhap vao ten cua ban";
        return false;
    } else if (email.indexOf('@') == -1) {
		let emailError = document.getElementById("emailError");
        emailError.innerText = "Vui long nhap dung dia chi email!";
        return false;
	} else  if (phone == "") {
        let phoneError = document.getElementById("phoneError");
        phoneError.innerText = "Vui long nhap vao SDT cua ban";
        return false;
    } else if (password == "") {
        let passwordError = document.getElementById("passwordError");
        passwordError.innerText = "Vui long nhap vao mat khau";
        return false;
    } else if ( password != retype) {
        let retypeError = document.getElementById("retypeError");
        retypeError.innerText = "Mat khau khong trung khop";
        return false;
    } else {
        return true;
    }
}

function removeError() {
    let name = document.getElementById("username").value;
    let email = document.getElementById("email-address").value;
    let phone = document.getElementById("phone-number").value;
    let password = document.getElementById("password").value;

    if (name != "") {
        let nameError = document.getElementById("nameError");
        nameError.innerText = "";
    }

    if (email.indexOf('@') == 0){
        let emailError = document.getElementById("emailError");
        emailError.innerText = "";
    }

    if (phone != "") {
        let phoneErrorError = document.getElementById("phoneError");
        phoneErrorError.innerText = "";
    }

    if (password != "") {
        let passwordError = document.getElementById("passwordError");
        passwordError.innerText = "";
    }
}