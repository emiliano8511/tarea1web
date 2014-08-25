<html>
<body>
<center>
<h1>Modificar Datos</h1>
<form method="post" action="http://docencia.eit.udp.cl/~15996273/web/swisstool/index.php/Tareacontroller/actualizar">
<input type="hidden" name="id" value="<?=$singleentry->id?>">
<table>
<tr>
<td align="right">Titulo</td><td> <input type="text" name="titulo" value="<?=$singleentry->titulo?>"></td>
</tr><tr>
<td align="right">Contenido</td><td><input type="text" name="contenido" value="<?=$singleentry->contenido?>">
</tr>
</table>
</br>
<input type="submit" value="Modificar"> <a href="http://docencia.eit.udp.cl/~15996273/web/swisstool/index.php/Tareacontroller/listar"><input type="button" value="Regresar"></a>
</table>
</form>
</center>
</body>
</html>
