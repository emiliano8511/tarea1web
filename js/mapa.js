var map;

function initialize() {
  var mapOptions = {
    zoom: 12
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  // Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      //var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
      var pos = new google.maps.LatLng(-33.442909, -70.65387);
      
      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}




function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}

google.maps.event.addDomListener(window, 'load', initialize);

function llenarPuntosExistentes() 
{
	var mensaje;
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
            var r = xmlhttp.responseText;   								
			
			var mensaje = r.split('*');
			var n = mensaje.length -1;
			var i = 0;
//alert(r);																			
			while (i != n)
			{
				var mensaje2 = mensaje[i].split(',');																										
				var pos = mensaje2[1].split(',');	//latitud - longitud										
				latlog = new google.maps.LatLng(mensaje2[0],mensaje2[1]);
				console.log(latlog);
				//var images = mensaje2[9]; //se modifica si se agrega info
				var marker = new google.maps.Marker
				({
					position: latlog,
					map: map,
					icon: 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'
					//icon:images
				});		
								
				//attachSecretMessage(marker, i,mensaje2[1],mensaje2[0],mensaje2[0]);  //funciona
				attachSecretMessage(marker);
										
				i = i+1;
			}		
																																
        }
    }
	xmlhttp.open("POST","/public_html/web/back/puntos.php",true); //true	        	
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-type", "text/html; charset=iso-8859-1");
    str = "q="+mensaje;
    xmlhttp.setRequestHeader("Content-length", str.length);                
    xmlhttp.send(str);    						 			      
}

function attachSecretMessage(marker) 
	{	
	/*var contentString = '<div id="content">'+						
			'<div id="bodyContent">'+"Lugar: "+lugar+'<br>'+"ISP: "+isp+'<br>'+"IP: "+ip+'<br>'+"AS: "+as+'<br>'+"SSID: "+ssid+'<br>'+"BSSID: "+bssid+'<br>'+'<img src="images/udp.png" />'+		
			'</div>'+
			'</div>';*/
		var contentString = '<div id="content">'+						
			'<div id="bodyContent">'+'<br>'+"ingresando a mapa.js"+	 	
			'</div>'+
			'</div>';//'<img src="'foto'" />' images/udp.png
		var infowindow = new google.maps.InfoWindow
		({
			content: contentString,
			maxWidth: 200
		});						
		google.maps.event.addListener(marker, 'click', function() 
		{
			infowindow.open(map,marker);
		});												
	var infowindow = new google.maps.InfoWindow({
	content: contentString
	});
	google.maps.event.addListener(marker, 'click', function() 
	{
		infowindow.open(marker.get('map'), marker);
	});
}

llenarPuntosExistentes();

