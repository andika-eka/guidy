function ValidasiForm() {
	//form validasi untuk menampilkan pesan jika terdapat inputan yang kosong
	if (document.FormReg.fname.value == "") {
		//pesan error ditampilkan menggunakan DOM pada masing2 id
		document.getElementById("err_fname").innerHTML = "Please fill your first name";
		return false;
	} else {
		document.getElementById("err_fname").innerHTML = "";
	}
	if (document.FormReg.lname.value == "") {
		//pesan error ditampilkan menggunakan DOM pada masing2 id
		document.getElementById("err_fname").innerHTML = "Please fill your last name";
		return false;
	} else {
		document.getElementById("err_fname").innerHTML = "";
	}
	if (document.FormReg.email.value == "") {
		//pesan error ditampilkan menggunakan DOM pada masing2 id
		document.getElementById("err_email").innerHTML = "please input your email first";
		return false;
	} else {
		document.getElementById("err_email").innerHTML = "";
	}

	if (document.FormReg.pass.value == "") {
		document.getElementById("err_pass").innerHTML = "please input your password";
		return false;
	} else if (document.FormReg.pass.value.length <= 6) {
		document.getElementById("err_pass").innerHTML = "Password must be longer than 6 character";
		return false;
	} else {
		document.getElementById("err_pass").innerHTML = "";
	}
}
