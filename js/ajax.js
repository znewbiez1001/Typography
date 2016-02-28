function cauchao(hoten) {
	if(hoten.length == 0){
		document.getElementById('loichao').innerHTML ="";
		return;
	}else{
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById("loichao").innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET", "xl_loichao.php?hoten=" + hoten, true);
		xmlhttp.send();
	}
}