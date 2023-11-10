<h1>Nos contate</h1>
<form action="/contato" method="post">
    <div class="container-input">
        <label for="input-name">Nome</label>
        <input type="text" name="name" id="input-name" placeholder="Digite o seu nome">
    </div>
    <div class="container-input">
        <label for="input-email">Email</label>
        <input type="email" name="email" id="input-email" placeholder="Digite o seu email">
    </div>
    <div id="container-text">
        <label for="input-text">Mensagem</label>
        <textarea name="text" id="input-text" cols="30" rows="10"></textarea>
    </div>
    <div id="container-actions">
        <input type="submit" id="submit-button" value="Enviar">
        <input type="reset" value="Apagar">
    </div>
</form>