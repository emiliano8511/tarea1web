<html>
<body>
<center>
<table border=1>
<?php
foreach ($data as $d)
{
?><tr><td width=30%><?php
        echo $d->titulo;
?></td><td width=30%><?php
	echo $d->contenido;
?></td><td width=30%>
<?php echo '<a href="byid/'.$d->id.'"><input type="button" value="Editar"></a>'?>
</td></tr><?php
}
?>

<h1>Lista de los ultimos 10 Ingresos en la BD</h1>
<a href="../"><input type="button" value="Volver"></a></br></br>
</center></body></html>

