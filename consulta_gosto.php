<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script>
		function tabClick(value) {
			if(value == 0) {
				$("#frm_consulta").submit();	
			}
		}
	</script>
	<style>
		.text-right {
			text-align:right;
		}	

		.text-left {
			text-align:left;
		}

		.text-center {
			text-align:center;
		}

		.gap-top10 {
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<form name="frm_consulta" id="frm_consulta" method="POST" action="index.php">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h3><img src="images/cbox.png"/>CBox </h3>
				  	<ul class="nav nav-tabs">
					    <li class=""><a href="#" onclick="tabClick(0);">Consulta Empresa e/ou Profissao</a></li>
					    <li class="active"><a href="#" onclick="tabClick(1);">Consulta de gostos</a></li>
				  	</ul>
				  	<br>
				</div>
			</div>	  
			<div class="row gap-top5">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading text-center">
							<h3>Consulta de clientes</h3>	
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-2 text-right">
									<h5>Paginas: </h5>
								</div>
								<div class="col-xs-8">
									<select id="company" class="form-control">
										<option></option>
										<option>Pagina1</option>
										<option>Pagina2</option>
										<option>Pagina3</option>
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-xs-offset-3 gap-top10">
								<input type="button" id="btn_consultar" value="Consultar" class="form-control btn btn-primary"/>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="row gap-top5">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading text-center">
							<h3>Tabela de consulta</h3>	
						</div>
						<div class="panel-body">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Sexo</th>
										<th>Empresa</th>
										<th>Quantidade</th>
										<th>Range de idade</th>
										<th>Check</th>
										<th>Acao</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-left">Masculino</td>
										<td class="text-left">EmpresaX</td>
										<td class="text-right">50</td>
										<td class="text-right">18-25</td>
										<td class="text-center"><input type="checkbox"/></td>
										<td class="text-center"><button type="button" class="btn btn-infoform-control" data-toggle="modal" data-target="#myModal">Acao</button></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">
			    	<div class="modal-content">
			        	<div class="modal-header">
			          		<button type="button" class="close" data-dismiss="modal">&times;</button>
			          		<h4 class="modal-title">Enviar mensagem</h4>
			        	</div>
			        	<div class="modal-body">
			        		<div class="row">
			        			<div class="col-xs-12">
			        				<textarea class="form-control"></textarea>
			        			</div>
			        		</div>
			        		<div class="row gap-top10">
			        			<div class="col-xs-12">
			        				<input type="button" id="btn_enviar" value="Enviar" class="form-control btn btn-primary"/>
			        			</div>
			        		</div>
			        		
			        	</div>
			        	<div class="modal-footer">
			          		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			        	</div>
			      	</div>  
			    </div>
			 </div>			
		</div>
	</form>	
</body>
</html>