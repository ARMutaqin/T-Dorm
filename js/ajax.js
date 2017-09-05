var hmlHttp

// GET KAMAR
function showKamar(str){
	xmlHttp = GetXmlHttpObject()
	if(xmlHttp == null){
		alert("Browser tidak support HTTP Request")
		return
	}
	var url="get-kamar.php"
	url = url+"?kamar="+str
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=stateChanged
	xmlHttp.open("GET", url, true)
	xmlHttp.send(null)
}

function stateChanged(){

	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("kamar").innerHTML=xmlHttp.responseText
	}
}

// GET NAMA MAHASISWA

function showMhs(str){
	xmlHttp = GetXmlHttpObject()
	if(xmlHttp == null){
		alert("Browser tidak support HTTP Request")
		return
	}
	var url="get-Mhs.php"
	url = url+"?mhs="+str
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=stateChangedMhs
	xmlHttp.open("GET", url, true)
	xmlHttp.send(null)
}

function stateChangedMhs(){

	if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
		document.getElementById("mhs").innerHTML=xmlHttp.responseText
	}
}


function GetXmlHttpObject(){
	var xmlHttp = null;
	try{
		xmlHttp=new XMLHttpRequest();
	}
	catch(e){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(e){
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}