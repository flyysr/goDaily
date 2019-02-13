var xhr = new XMLHttpRequest();
    xhr.timeout = 3000;
    xhr.ontimeout = function (event) {
        alert("请求超时！");
    }
	alert(xhr.readyState);
    var formData = new FormData();
    formData.append('tel', '18217767969');
    formData.append('psw', '111111');
    xhr.open('POST', 'http://192.168.123.41:3000/api');
    xhr.send(formData);
alert(xhr.readyState);
alert(xhr.responseText);
    xhr.onreadystatechange = function () {
		if(xhr.readyState ==0){
			alert('0:---');
		}
		if(xhr.readyState == 1){
			alert('1:---');
		}
		if(xhr.readyState == 2){
			alert('2:---');
		}
		if(xhr.readyState == 3){
			alert('3:---');
		}
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
        else {
			console.log(xhr);
            alert(xhr.statusText);
        }
    }
