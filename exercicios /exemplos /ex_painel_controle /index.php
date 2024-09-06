<?php
    $pdo = new PDO('mysql:host=localhost;dbname=projeto', 'root','');
    $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
    $sobre->execute();
    $sobre = $sobre->fetch()['Sobre'];
?>

<html>	
    <head></head>
    
<!--  outro index.php	 -->
<!-- pdo  -->
<!--    Home   --> 
 	<div id="sobre"><?php echo $sobre; ?></div
 	<div id="equipe">
		<?php 
			$selectMembros = $pdo->prepare("SELECT * FROM `tb_equipe`");
			$selectMembros->execute();
			$membros = $selectMembros->fetchAll();
			for($i = 0; $i < count($membros); $i++){
		?>
		<!-- 		divs e etc		 -->
		<!-- 	h1. h2 com echo em $membros[$i]['nome']	 -->
		<!-- 	p com echo em $membros[$i]['desc']	 -->
		<?php } ?>
	</div>

<!-- index.php do painel -->
<body>
	    
        <!--    Editar Sobre   -->
        <div class="col-md-9">
	      <?php 

              if(isset($_POST['editar_sobre'])){
        		$sobre = $_POS['sobre'];
			$pdo->exec("DELETE FROM `tb_sobre`");
			$sql = $pdo->prepare("INSERT INTO `tb_sobre` VALUES(null, ?)");
			$sql->execute(array($sobre));
               		echo '<div class="alert alert-success" role="alert">O código HTML <b>Sobre</b> foi editado com sucesso!</div>';
			$sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
			$sobre->execute();
			$sobre = $sobre->fetch()['Sobre'];
              } else if (isset($_POST['cadastrar_equipe'])){
		     	$nome = $_POST['nome'];
		      	$descricao = $_POST['desc'];
		      	$sql = $pdo->prepare("INSERT INTO `tb_equipe` VALUES(null, ?, ?)");
			$sql->execute(array($nome, $descricao));
	                echo '<div class="alert alert-success" role="alert">O integrante da equipe foi cadastrado com sucesso!</div>';
	      }
        
        ?>
      		<div id="sobre_section">
      			<h3>Sobre</h3>
      			<form method="POST">
      			<!--        label          -->
              		<!--        Textarea   name="sobre"       -->
              		<!--        input hidden name="editar_sobre"   value=""    -->
			<!--        button submit name="acao"    -->
              		</form>
      		</div>
		<div id="equipe_section">
      			<h3>Cadastrar Edit</h3>
      			<form method="POST">
      			<!--        label          -->
			<!-- 	    Input	name: nome	-->
      			<!--        label          -->
			<!-- 	    Input	name: desc	-->
              		<!--        input hidden name="cadastrar_equipe"   value=""    -->
			<!--        button submit name="acao"    -->
              		</form>
      		</div>
		<div id="membros-lista">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>#</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$selectMembros = $pdo->prepare("SELECT * FROM `tb_equipe`");
						$selectMembros->execute();
						$membros = $selectMembros->fetchAll();
						foreach($membros as $key=>value){
					?>
					<tr>
						<td><?php echo $value['id']?></td>
						<td><?php echo $value['nome']?></td>
						<td><button class="deletar-membro" id_membro="<?php echo $value['id']; ?>" type="submit">Excluir</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

		</div>
      	</div>
    </body>
</html>

<script>

	$('button.deletar-membro').click(function(){
		var id_membro = $(this).attr('id_membro');
		$.ajax({
			method: 'POST',
			data: {'id_membro': id_membro},
			url: 'deletar.php'
		}).done(function(){
			$(this).parent().parent().remove();
		})
	})
	
</script>

<!-- outro arquivo php = deletar.php  -->
<?php 
	if(isset($_POST['id_membro'])){
		$pdo = new PDO('mysql:host=localhost;dbname=projeto', 'root','');
		$sql = $pdo->prepare("DELETE FROM `tb_equipe` WHERE id = ?");
		$sql->execute(array($_POST['id_membro']));
	}
?>
