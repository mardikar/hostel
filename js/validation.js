function previewFile() {
	var preview = document.querySelector('input[type=image]');
	//selects the query named img
	var file = document.querySelector('input[type=file]').files[0];
	//sames as here
	var reader = new FileReader();

	reader.onloadend = function() {
		preview.src = reader.result;
	}
	if (file) {
		reader.readAsDataURL(file);
		//reads the data as a URL
	} else {
		preview.src = "";
	}
}

function upload() {
	document.getElementById(uploadform).click();
	
}

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function(e) {
			$('#blah').attr('src', e.target.result).width(150).height(200);
		};

		reader.readAsDataURL(input.files[0]);
	}
}

function fname() {

	//var x = document.form.fname.value;
	var x = document.getElementById("fname").value;
	//alert("Please provide your name!");

	if (!(/^[A-Za-z\s]+$/.test(x))) {
		//alert("Please provide your name!");
		document.getElementById("error1").innerHTML = "<b>Please provide your valid name!</b>";
		return false;
	} else {
		document.getElementById("error1").innerHTML = "";
		return true;
	}
}

function college() {
	var x = document.getElementById("college").value;

	if (!(/^[A-Za-z.,\s]+$/.test(x))) {
		document.getElementById("error2").innerHTML = "<b>Please provide your valid college name!</b>";
		return false;
	} else {
		document.getElementById("error2").innerHTML = "";
		return true;
	}
}

function branch() {
	var x = document.getElementById("branch").value;

	if (!(/^[A-Za-z.\s]+$/.test(x))) {
		document.getElementById("error3").innerHTML = "<b>Please provide your valid branch name!</b>";
		return false;
	} else {
		document.getElementById("error3").innerHTML = "";
		return true;
	}
}

function email() {
	var x = document.getElementById("email").value;
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
		document.getElementById("error4").innerHTML = "<b>Please provide valid email id </b>";
		return false;

	} else {
		document.getElementById("error4").innerHTML = "";
		return true;
	}
}

function password() {
	var x = document.getElementById("password").value;
	var y = x.length;
	if (y < 5) {
		document.getElementById("error5").innerHTML = "<b>Password must contain atleast 6 characters!!</b>";
		return false;
	} else {
		document.getElementById("error5").innerHTML = "";
		return true;
	}

	if (!(/^[A-Za-z\s]+$/.test(x))) {
		document.getElementById("error5").innerHTML = "<b>Password should not contain other than alphanumerics and @,underscore,! </b>";
		return false;
	} else {
		document.getElementById("error5").innerHTML = "";
		return true;
	}

}

function CheckPasswordStrength(password) {
	var password_strength = document.getElementById("error5");

	//TextBox left blank.
	if (password.length == 0) {
		password_strength.innerHTML = "";
		return;
	}

	//Regular Expressions.
	var regex = new Array();
	regex.push("[A-Z]");
	//Uppercase Alphabet.
	regex.push("[a-z]");
	//Lowercase Alphabet.
	regex.push("[0-9]");
	//Digit.
	regex.push("[$@$!%*#?&]");
	//Special Character.

	var passed = 0;

	//Validate for each Regular Expression.
	for (var i = 0; i < regex.length; i++) {
		if (new RegExp(regex[i]).test(password)) {
			passed++;
		}
	}

	//Validate for length of Password.
	if (passed > 2 && password.length > 8) {
		passed++;
	}

	//Display status.
	var color = "";
	var strength = "";
	switch (passed) {
	case 0:
	case 1:
		strength = "Weak! add special characters to make it strong";
		color = "red";
		break;
	case 2:
		strength = "Good";
		color = "darkorange";
		break;
	case 3:
	case 4:
		strength = "Strong";
		color = "green";
		break;
	case 5:
		strength = "Very Strong";
		color = "darkgreen";
		break;
	}
	password_strength.innerHTML = strength;
	password_strength.style.color = color;
}

function confirm() {
	var x = document.getElementById("password").value;
	var y = document.getElementById("confirm").value;

	if (x.localecompare(y) != 0) {
		document.getElementById("error6").innerHTML = "<b>Password is not matching!!</b>";
		return false;
	} else {
		document.getElementById("error6").innerHTML = "";
		return true;
	}

}

function call() {
	if (  fname() && college() && branch() && confirm() && email() ) {
		return true;
	} else {
		alert("Fill Valid Information!!!");
		window.location.href = "index.php";
	}
}
