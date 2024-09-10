<div class="container">
    <div class="chamada">
        <div class="center">
            <h2><?php echo $arr['titulo']; ?></h2>
        </div><!-- center -->
    </div><!-- chamada -->
    <div class="contato">
        <form method="POST">
            <input type="text" name="nome" id="nome" placeholder="nome..."><br/>
            <textarea name="mensagem" id="mensagem" placeholder="Digite sua mensagem..."></textarea><br/>
            <input type="submit" name="acao" value="Enviar">
        </form>
    </div><!-- contato -->
</div>
