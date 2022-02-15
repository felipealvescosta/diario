<?php
include("header.php");
?>

<body class="container-fluid" style=" color: white;">
	<div class="row" style="margin-top: 100px;">
	</div>

	<div class="row" style="margin-top: 50px;">
		<center><p>
			Dados para acesso:<br>
			Usuário: teste<br>
			Senha: teste
		</p>
	</center>
	</div>
	
	<div class="row">

		<div class="col-md-offset-4 col-md-4">
			<div class="card card-body shadow p-3 mb-5 bg-white rounded">
				<center>
					<h3>Coodenador</h3>
					<img src="secretaria/img/secretaria.png" alt="Secretária" >
					<br>
				</center>
				<form class="form-group"  style="padding: 20px;">
					<hr>
					<label>Usuário</label>
					<input type="text" name="" value="" placeholder="" class="form-control">
					<br>
					<label>Senha</label>
					<input type="password" name="" value="" placeholder="" class="form-control">
					<br>
					<a href="coordenador/" title="" class="btn btn-block btn-info">Enviar</a>
				</form>
		</div>
		</div>
	</div>
</body>
<?php
include("footer.php");
?>