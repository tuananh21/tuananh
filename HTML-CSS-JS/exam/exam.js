function validateForm() {
    let name = document.getElementById("username").value;
    let email = document.getElementById("email-address").value;
    let phone = document.getElementById("phone-number").value;
    let password = document.getElementById("password").value;
    let retype = document.getElementById("retype").value;

    let nameError = document.getElementById("nameError");
    let emailError = document.getElementById("emailError");
    let phoneError = document.getElementById("phoneError");
    let passwordError = document.getElementById("passwordError");
    let retypeError = document.getElementById("retypeError");

    // if (name == "") {
    //     let nameError = document.getElementById("nameError");
    //     nameError.innerText = "Vui long nhap vao ten cua ban";
    //     // return false;
    // } else if (email.indexOf('@') == -1) {
	// 	let emailError = document.getElementById("emailError");
    //     emailError.innerText = "Vui long nhap dung dia chi email!";
    //     // return false;
	// } else  if (phone == "") {
    //     let phoneError = document.getElementById("phoneError");
    //     phoneError.innerText = "Vui long nhap vao SDT cua ban";
    //     // return false;
    // } else if (password == "") {
    //     let passwordError = document.getElementById("passwordError");
    //     passwordError.innerText = "Vui long nhap vao mat khau";
    //     // return false;
    // } else if ( retype != password) {
    //     let retypeError = document.getElementById("retypeError");
    //     retypeError.innerText = "Mat khau khong trung khop";
    //     // return false;
    // } else {
    //     return true;
    // }

    if (name == "" ) { 
        nameError.innerText = "Vui long nhap vao ten cua ban";
    } 

    if (email.indexOf('@') == -1) {
        emailError.innerText = "Vui long nhap dung dia chi email!";
    } 

    if (phone == "") {
        phoneError.innerText = "Vui long nhap vao SDT cua ban";
    } 

    if (password.length < 6) {
        passwordError.innerText = "Mat khau phai co it nhat 6 ki tu";
    } 

    if (retype != password) {
        retypeError.innerText = "Mat khau khong trung khop";
        return false;
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

    if (email.includes('@') ) {
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