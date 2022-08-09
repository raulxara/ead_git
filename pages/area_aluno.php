<div style="text-align:center;" class="box container">
	<h2 class="bem-vindo">Seja bem-vindo <?php echo $_SESSION['nome_aluno']; ?> !</h2>


	<?php
		if(\models\homeModel::hasCursoById($_SESSION['id_aluno'])){
	?>
	
		<?php
			$modulos = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.modulos`");
			$modulos->execute();
			$modulos = $modulos->fetchAll();
			foreach ($modulos as $key => $value) {
		?>
			<p class="nome_modulo"><i class="fa-solid fa-eye"></i> <?php echo $value['nome']; ?></p>
			<?php 
			$aulas = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.aulas` WHERE modulo_id = $value[id]");
			$aulas->execute();
			$aulas = $aulas->fetchAll();
			foreach ($aulas as $key => $aula) {
				echo '<p class="nome_aula"><a href="'.INCLUDE_PATH.'aula/'.$aula['id'].'"><i class="fa fa-play" aria-hidden="true"></i> '.$aula['nome'].'</a></p>';
			}
			?>
		<?php } ?>
	<?php }else{ ?>
		<h3>Increva-se no Curso Mais completo do Brasil e <a class="nav-link" href="<?php echo INCLUDE_PATH; ?>?addCurso">comece agora mesmo.</a></h3>
		<div class="apresentacao">
		<iframe src="https://www.youtube.com/embed/t6ALSUjx5uo?autoplay=1&showinfo=0&controls=0&rel=0"></iframe>
		</div>
		<a class="btn-chamada" href="<?php echo INCLUDE_PATH; ?>?addCurso">Comprar</a>
	<?php } ?>
	<div class="clear"></div>
</div><!--box-->