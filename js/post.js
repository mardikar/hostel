function post(text) {

	//var text = document.getElementById("aboutDescription").value;
	var error = document.getElementById("alert");
	error.style.color = "red";
	if (text == '') {
		error.innerHTML = "Story Can Not Be Empty!!!!!!!!!!";
	} else if (text.length < 100) {
		error.innerHTML = "Story Can Not Be This Small !!!!!!!!!!";
	} else if (text.length > 3000) {
		error.innerHTML = "Story should Not Be This Big!!!!!!!!!!";
	} else {
		var iDiv = document.getElementById('list');

		var innerDiv = document.createElement('div');
		innerDiv.className = 'post';

		iDiv.insertBefore(innerDiv, iDiv.firstChild);
		innerDiv.innerHTML = "<div class=\"post_header\"><img id=\"photo\" src=\"http://p.imgci.com/db/PICTURES/CMS/128400/128483.1.jpg\"  alt=\"sachin\"/><div class=\"personal\"><p><b>Harbhajan Singh</b></p><p>VJTI</br> B.tech. Computer</p></div></div><div class=\"post_data\"><p>" + text + "</p></div>";
		document.getElementById("aboutDescription").value = "";
		error.innerHTML = "posted";
		error.style.color = "green";
	}
}

function search() {

	var name = document.getElementById("search").value;
	alert(name);
	var pattern = name.toLowerCase();
	var targetId = "";

	var divs = document.getElementById("list");
	var x = divs.getElementsByTagName("DIV");
	//var y = x[2].getElementsByTagName("P");
	//alert(y.length);
	for (var i = 0; i < x.length; i += 4) {
		var para = x[i + 2].getElementsByTagName("P");
		var index = para[0].innerText.toLowerCase().indexOf(pattern);
		//alert(index);
		if (index != -1) {
			x[i + 2].scrollIntoView();
			break;
		}
	}
}