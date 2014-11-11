function inscribir_usuario() 
{
	var mail;
	var pass;	
	var str;

	mail = document.getElementById("inputEmail3").value;
	pass = document.getElementById("inputPassword3").value;
	
	var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();                
        }
        else
        {// code for IE6, IE5
        	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");                
        }
        xmlhttp.onreadystatechange=function()
        {                
        	if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {                                              
			str = mail +  "<tag>" + pass;
                	var r = xmlhttp.responseText;                               			alert ('hi'); 
                        if (r == "error")
                        {
                        	alert ("Error");
                        }
                        else
                        {
				alert("OK");
										//Redireccionar.
                                        //location.href="index.html";
                        }
                                
                }
        }
        xmlhttp.open("POST","http://docencia.eit.udp.cl/~15996273/web/swisstool/index.php/Tareacontroller/insertar_usuario",true);        
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.setRequestHeader("Content-type", "text/html; charset=iso-8859-1");       str = "q="+str; 
        xmlhttp.setRequestHeader("Content-length", str.length);                
	xmlhttp.send(str);                
        	
}
