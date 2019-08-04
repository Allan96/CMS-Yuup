<?php
	include_once "includes/head.php";
	include_once "includes/header.php";
	include_once "includes/navi.php";
	Adminhk::CheckRank(6);
?>
<aside class="right-side">
	<section class="content">
		<div class="row">
			<?php
				if (User::userData('rank') > '7')
				{
				?>
				<div class="col-md-12">
					<section class="panel">
						<header class="panel-heading">
							Enontrar MOBI (Explicações no fim da página)
							<form action="" method="POST">
							</header>
							<div class="panel-body">
								<?php Adminhk::searchMobi(); ?>
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Nome (MESMO NOME DO CATALOGO)</label>
									<div class="col-sm-10">
										<input type="text"  value="" name="mobi" class="form-control">
									</div>
								</div>
								<br><br>
								<button style="width: 140px;
								float: right;
								margin-right: 14px;" name="zoek" type="submit" class="btn btn-success">Procurar</button>
							</div>
						</section>
					</div>
				</form>
				
				
				<div class="col-md-12">
					<section class="panel">
						<header class="panel-heading">
							Enontrar MOBI (OPÇÃO 2) - ID DO MOBI NO QUARTO
							<form action="" method="POST">
							</header>
							<div class="panel-body">
															<?php Adminhk::searchMobi3(); ?>
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">ID (Que se encontra quando põe o mobi no quarto)</label>
									<div class="col-sm-10">
										<input type="text"  value="" name="mobi5" class="form-control">
									</div>
									
								</div>
								<br><br>
								<button style="width: 140px;
								float: right;
								margin-right: 14px;" name="zoek5" type="submit" class="btn btn-success">Procurar</button>
							</div>
					</section>
					
					</div>
				</form>
				
				<?php
				}
				else{
				?>
				<input type="hidden"  value="<?php echo Adminhk::EditUser("zoek"); ?>" name="zoek" class="form-control" disabled>
				<?php
				}
			?>
				
		
		</div>
		<?php
			include_once "includes/footer.php";
			include_once "includes/script.php";
		?>																							