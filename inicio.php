<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<title>Nossa Aula 04</title>
		<style>
			*{margin: 0;padding:0;}
			#menu{position: fixed; float: rigth; margin: -14% auto auto 92%;}
		</style>
	</head>
	<body>
		<div class="jumbotron container-fluid text-center">
			<h1>Página Inicial</h1>
		</div>
		<div id="menu">
			<?php
				echo "<a href='login.html'>Login</a>";
			?>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3"> </div>
				<div class="col-md-6" style="background: #cde; height: 450px;">

				</div>
				<div class="col-md-3"> </div>
			</div>
		</div>
		<div class="container" style="display: none">
			<div class="row">
				<div class="col-md-3"> </div>
				<div class="col-md-6" style="background: #ddd">
					<form id="frm" action="aula10_ex02.html">
						<div class="row form">
							<div class="form-group col-md-6">
								<label for="nome">Nome</label>
								<input type="text" class="form-control" id="nome" placeholder="Nome">
								<input type="hidden" name="nome" id="oculto">
							</div>
							<div class="form-group col-md-6">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email" onclick="B()">
							</div>
						</div>
						<div class="form">
							<div class="form-group">
								<label for="endereco">Endereço</label>
								<input type="text" class="form-control" id="endereco" placeholder="Rua dos Alunos, nº 0E" onclick="C()">
							</div>
							<div class="form-group">
								<label for="bairro">Bairro</label>
								<select id="bairro" class="form-control">
									<option selected>Escolher...</option>
									<option>Bangu</option>
									<option>Copacabana</option>
									<option>K-11</option>
									<option>Posse</option>
								</select>
							</div>
							<div class="form-group">
								<label for="cidade">Cidade</label>
								<select id="cidade" class="form-control">
									<option selected>Escolher...</option>
									<option>Rio de Janeiro</option>
									<option>Nova Iguacu</option>
								</select>
							</div>
						</div>
						<div class="row form">
							<div class="form-group col-md-6 text-center">
								<button type="button" class="btn btn-primary" style="width: 150px" onclick="E()">Cadastrar</button>
							</div>
							<div class="form-group col-md-6 text-center">
								<button type="button" class="btn btn-primary" style="width: 150px" onclick="D()">Limpar</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-3"> </div>
			</div>
		</div>
	</body>
</html>