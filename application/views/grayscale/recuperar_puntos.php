<?php

 echo "-33.442909,-70.65387";
 echo '*';

/*include 'conexion.php';

        $query="SELECT ubicacion.latitud, ubicacion.longitud, ubicacion.nomLugar, conexion.isp, conexion.ip, conexion.as, hotspots.bssid, hotspots.ssid FROM ubicacion,conexion,hotspots where hotspots.Idconexion=conexion.Idconexion AND hotspots.idUbicacion=ubicacion.idUbicacion ORDER BY conexion.Idconexion DESC";
        $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

$count=0;      
        while ($row = mysql_fetch_array($result))
        {
		//if($count==10)
                //{break;}		
	 	        echo $row['latitud'].",".$row['longitud'];
			echo ',';			
			echo $row['ip'];
			echo ',';			
			echo $row['as'];
			echo ',';			
			echo $row['ssid'];
			echo ',';			
			echo $row['bssid'];
                        echo ',';
                        echo $row['nomLugar'];
                        echo ',';
                        echo $row['isp'];
                        echo ',';
//'<img src="images/udp.png" />'
			//echo "/home/casa/Escritorio/RTT_matlab/graficos-".row['ip']."_".date("d-m-y");
//<a href="popupex.html" onclick="return popitup('popupex.html')"
	//>Link to popup</a>
			echo '<a href="graficos-'.$row['ip'].'_'.date('d-m-y', strtotime('-3 day')).'/rtt_95_conf.jpg"><img src="graficos-'.$row['ip'].'_'.date('d-m-y', strtotime('-3 day')).'/rtt_95_conf.jpg" width="300" height="200"/></a>';
                        echo ',';
		    $nombre = explode(" ",$row['nomLugar']);
	            if($nombre[0] == "Metro")
		    {			
			 echo "/images/metro.png";
		    }
		    elseif($nombre[0] == "Petrobras" or $nombre[0] == "Shell" or $nombre[0] == "Copec" or $nombre[0] == "Terpel" ) 
		    {			
		       echo "/images/service.png";
		    }
		    elseif($nombre[0] == "Cafe")
		    {			
		       echo "/images/cafe.png";
		    }
		    elseif($nombre[0] == "cibercafe" )
		    {			
			 echo "/images/cibercafe.png";
		    }
		    elseif($nombre[0] == "restaurant")
		    {
                       echo "/images/restaurant.png";
                    }
		    else
		    {
			echo "/images/wifi.png";
		    }

			echo '*';
$count++;
	*/
        }                                               

?>


