<?php
session_start();
include_once("validarcookie.php");

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>IFG</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='../css/app.css'>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
		integrity="sha512-bXiTjOvpF0C8ztNlSjKjG9PLBo0Q/4izDrCxlu4bE4jB/+edwfrzd5ky09P5r5pqlJt1nkJtjL8VZ+L39P/ZHg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">

	<script src='../js/bootstrap.bundle.js'></script>

	<script src='../js/bootstrap.bundle.js'></script>
	<script src='../js/app.js'></script>

</head>

<body>

	<main class="container-fluid">

		<section class="container">
			<table class=" table" border="1">
				<thead class="table-dark">
					<th>ID</th>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Duração</th>
				</thead>
				<tbody>
					<?php include_once("../adm/painel.php") ?>
				</tbody>
			</table>









			<!-- Botão para abrir o primeiro modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
				<i class="bi bi-plus"></i> Cadastrar
			</button>
			<!-- Modal 1 -->
			<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modal1Label">CADASTAR PERSONAGEM</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						<div class="form-group">
							<form action="../adm/cadcursos.php" method="post" enctype="multipart/form-data">
									<label for="duracao">Imagem:</label>
									
										
										<input type="file" name="arquivo" id="arquivo" accept="image/*">

										<input type="submit" value="ok">
									

								</div>
							
								<div class="form-group">
									<label for="nome">Nome:</label>
									<input type="text" class="form-control" id="nome" name=" txtNome">
								</div>
								<div class="form-group">
									<label for="descricao">Descrição:</label>
									<textarea class="form-control" id="descricao" name="txtDesc"></textarea>
								</div>
								<div class="form-group">
									<label for="duracao">Duração:</label>
									<input type="text" class="form-control" id="duracao" name="txtDuracao">
								</div>
								
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
									<button type="submit" class="btn btn-primary">Enviar</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>

			<!-- Botão para abrir o segundo modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
				<i class="bi bi-pencil"></i> Alterar
			</button>

			<!-- Modal 2 -->
			<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modal2Label">ALTERAR DADOS</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="../adm/alteraPersonagem.php" method="post">
								<div class="form-group">
									<label for="nome2">ID:</label>
									<input type="text" class="form-control" id="nome2" name="id">
								</div>
								<div class="form-group">
									<label for="nome2">Nome:</label>
									<input type="text" class="form-control" id="nome2" name="txtNome">
								</div>
								<div class="form-group">
									<label for="descricao2">Descrição:</label>
									<textarea class="form-control" id="" name="txtDesc"></textarea>
								</div>
								<div class="form-group">
									<label for="duracao2">Duração:</label>
									<input type="text" class="form-control" id="duracao2" name="txtDuracao">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
									<button type="submit" class="btn btn-primary">Enviar</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Botão para abrir o terceiro modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">
				<i class="bi bi-trash"></i> Deletar
			</button>
			<!-- Modal 3 -->
			<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modal3Label">REMOVER PERSONAGEM POR ID</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							<form action="../adm/removePersonagem.php" method="post">
								<div class="form-group">
									<label for="id">ID:</label>
									<input type="text" class="form-control" id="id" name="id">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
									<button type="submit" class="btn btn-primary">Enviar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


			<button type="button" class="btn btn-danger">

				<i class="bi bi-box-arrow-right "></i><a href="logout.php" class="text-light">Logout</a>
			</button>
		</section>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.2/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>









</body>


</html>








</main>

</body>


</html>