<?php
    $pdo = new PDO('mysql:host=localhost;dbname=projeto', 'root','');
    $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
    $sobre->execute();
    $sobre = $sobre->fetch()['Sobre'];
?>

<html>
    <head></head>
    <body>
	<!--    Home   -->
	<div id="sobre"><?php echo $sobre; ?></div>
	    
        <!--    Editar Sobre   -->
        <div class="col-md-9">
	      <?php 

              if(isset($_POST['editar_sobre'])){
                $sobre = $_POS['sobre'];
		$pdo->exec("DELETE FROM `tb_sobre`");
		$sql = $pdo->prepare("INSERT INTO `tb_sobre` VALUES(null, ?)");
		$sql->execute(array($sobre));
                echo '<div class="alert alert-success" role="alert">O código HTML <b>Sobre</b> foi editado com sucesso!</div>'
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
      	</div>
        <!--    Cadastrar Equipe   -->
        <form method="POST">
        </form>
    </body>
</html>

<script></script>
