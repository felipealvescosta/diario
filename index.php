<?php
include("header.php");
?>

<body class="container-fluid" style=" color: white;">
	<div class="row" style="margin-top: 100px;">
		<center><h1>Escolha um perfil para teste</h1></center>
	</div>

	<div class="row" style="margin-top: 90px;">
	</div>
	
	<div class="row">

		<div class="col-md-4" >
			<div class="card card-body">
			<a href="secretaria.php">
				<center class="shadow p-3 mb-5 bg-white rounded">
					<h3>Secretária</h3>
					<img src="secretaria/img/secretariaed.png" alt="Secretária" >
				</center>
			</a>
		</div>
		</div>

		<div class="col-md-4" >
			<div class="card card-body">
			<a href="diretoria.php">
				<center class="shadow p-3 mb-5 bg-white rounded">
					<h3>Diretoria</h3>
					<img src="secretaria/img/coordenador.png" alt="Diretor" >
				</center>
			</a>
		</div>
		</div>

		<div class="col-md-4" >
			<a href="coordenador.php">
				<center class="shadow p-3 mb-5 bg-white rounded">
					<h3>Coordenador</h3>
					<img src="secretaria/img/secretaria.png" alt="Coordenador" >
				</center>
			</a>
		</div>

		<div class="col-md-4" style="margin-top: 30px;" >
			<a href="professor.php">
				<center class="shadow p-3 mb-5 bg-white rounded">
					<h3>Professor</h3>
					<img src="secretaria/img/professor.png" alt="Professor" >
				</center>
			</a>
		</div>

		<div class="col-md-4" style="margin-top: 30px;" >
			<a href="aluno.php">
				<center class="shadow p-3 mb-5 bg-white rounded">
					<h3>Aluno</h3>
					<img src="secretaria/img/aluno.png" alt="aluno" >
				</center>
			</a>
		</div>

		<div class="col-md-4" style="margin-top: 30px;" >
			<a href="funcionario.php">
				<center class="shadow p-3 mb-5 bg-white rounded">
					<h3>Funcionário</h3>
					<img src="secretaria/img/funcionario.png" alt="aluno" >
				</center>
			</a>
		</div>
	</div>
</body>
<?php
include("footer.php");
?>