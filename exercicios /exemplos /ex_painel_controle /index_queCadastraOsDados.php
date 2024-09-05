<html>
    <head></head>
    <body>
        <!--    Editar Sobre   -->
        <div class="col-md-9">
	      <?php 

              if(isset($_POST['editar_sobre'])){
                $sobre = $_POS['sobre'];
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
