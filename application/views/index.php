<!DOCTYPE html>
<html>
<head>
	<title>Agenda</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-md-12">
					<table class="table table-striped table-bordered">
						
							<tr>
								<th>ID</th>
								<th>Titulo</th>
								<th>Data</th>
								<th>Ações</th>
							</tr>
							<?php foreach($Compromissos as $compromisso) : ?>
							<tr>
									<td><?= $compromisso["id"]?></td>
									<td><?= $compromisso["titulo"]?></td>
									<td><?= $compromisso["dataa"]?></td>
									<td><a href="<?= base_url('index.php/Compromissos/delete/'.$compromisso['id']) ?>" class="btn btn-danger">Deletar</a>	
																
									</td>
							</tr>
							<?php endforeach ?>
					</table>

					<div class="row">
						<div class="col-md-12">
						<h2>Adicionar Tarefas</h2>

					<?php
					echo form_open("Compromissos/salvar");

					echo form_label("ID:", "caixaid");
					echo form_input(array(
					"name" => "id",
					"class" => "form-control",
					"id" => "caixaid"
					));

					echo form_label("Titulo:", "caixatitulo");
					echo form_input(array(
					"name" => "titulo",
					"class" => "form-control",
					"id" => "caixatitulo"
					));

					echo form_label("Data:","caixadata");
					echo form_input(array(
					"type"=>"date",
					"id"=>"caixaData",
					"name"=>"dataa", 
					"value"=>"0000-00-00",
					"min"=>"2018-06-07",
 					"max"=>"2999-06-14"
					));

					echo form_button(array(
					"class"=>"btn btn-primary",
					"content"=>"cadastrar",
					"type"=> "submit"
					));						
					?>
						</div>
					</div>
					
			</div>
		</div>
</body>
</html>