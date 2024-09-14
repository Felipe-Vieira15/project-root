<?php
    $title = "Contato";
    include "includes/header.php";
?>

<div class="inicio">
    <h2 class="descricao">Se é de seu interesse, envie-nos uma mensagem!</h2>
</div>
<div class="formulario">
    <form action="POST">
        <label for="nome">Nome:</label> 
        <br>
        <input type="text" placeholder="Nos informe seu nome">
        <br>
        <label for="email">Email:</label>
        <br>
        <input type="email" placeholder="Nos informe seu Email">
        <br>
        <label for="mensagem">Mensagem:</label>
        <br>
        <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Nos informe sua mensagem"></textarea>
        <button type="submit">Enviar</button>
    </form>
</div>

<?php
    include "includes/footer.php";
?>