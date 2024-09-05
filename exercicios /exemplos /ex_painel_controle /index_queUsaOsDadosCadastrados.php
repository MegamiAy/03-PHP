<?php
    
    $pdo = new PDO('mysql:host=localhost;dbname=projeto', 'root','');
    $sobre = $pdo->prepare("SELECT * FROM `tb_sobre`")`;
    $sobre->execute();
    $sobre = $sobre->fetch()['Sobre'];

?>

<html>
    <head></head>
    <body>
    	<div id="sobre"><?php echo $sobre; ?></div>
        <form method="POST">
            <!--       input       -->
            <!--       input       -->
            <!--       input       -->
            <!--       button  submit     -->
        </form>
    </body>
</html>

<script></script>
