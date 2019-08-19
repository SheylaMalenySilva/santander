

var resultado=document.getElementById("mostrar");
function enviar(x){
	var xmlhttp;
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			resultado.innerHTML=xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET","Ventanas/detalles.php?id="+x,true);
	xmlhttp.send();


}



