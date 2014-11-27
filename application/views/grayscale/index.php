
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Hi</h1>
                        <p class="intro-text">Buscar o inventar logo y poner aqui.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Inicio -->
    <section id="inicio" class="container content-section text-center">
	<div class="row">
		<div class="col-md-12 column">
			<h3 class="text-center">
				Inicio de Sesion
			</h3>
<?php
if (!isset($_SESSION["mail"])) 
{
?>
<div id="inscribir" style="display: none">
<form method="post" class="form-horizontal" action="insertar_usuario">
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
<div class="col-sm-10">
<input type="text" name="mail" class="form-control" placeholder="e-mail"/>
</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
<div class="col-sm-10">
<input type="password" class="form-control" name="pass"/>
</div>
</div>


<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<input type="submit"  class="btn btn-default" value="Registrar"/>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<input type="button" class="btn btn-default"  value="Ingresar" onclick="document.getElementById('inscribir').style.display = 'none';document.getElementById('login').style.display = 'block';">
</div>
</div>
</form>
</div>

<div id="login" style="display: block">
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
<div class="col-sm-10">
<input type="text" name="mail" class="form-control" placeholder="e-mail"/>
</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
<div class="col-sm-10">
<input type="password" class="form-control" name="pass"/>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<input type="button" class="btn btn-default" value="Log In" onclick="logear_usuario();" />
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<input type="button" class="btn btn-default" value="Inscribir" onclick="document.getElementById('login').style.display = 'none';document.getElementById('inscribir').style.display = 'block';">
</div>
</div>



<form method="post" class="form-horizontal" action="logear_usuario">
</form>





</div>
<?php
}
else
{
	echo 'hi';
}
?>

		</div>
	</div>
    </section>
