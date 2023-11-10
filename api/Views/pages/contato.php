<?php 
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $text = $_POST['text'];

        echo "
            <p>Dados enviados:</p>
            <ul>
                <li>Nome: $name</li>
                <li>E-mail: $email</li>
                <li>Mensagem: $text</li>
            </ul>
        ";

        if (empty($name)) {
            $erro['name'] = 'O nome é obrigatório.';
        }
    
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erro['email'] = 'O e-mail é inválido.';
        }
    
        if (empty($text)) {
            $erro['text'] = 'A mensagem é obrigatória.';
        }

        if (empty($erro)) {
            $destinatario = 'mia.lojadedoces@gmail.com';
            $assunto = "$name entrou em contato!";
            $mensagem_html = '
                <h1>Mensagem de contato:</h1>
                <p><strong>Nome</strong>: ' . $name . '</p>
                <p><strong>E-mail</strong>: ' . $email . '</p>
                <p><strong>Mensagem</strong>: ' . $text . '</p>
            ';

            mail($destinatario, $assunto, $mensagem_html);

            echo '<p>E-mail enviado com sucesso</p>';
        } else {
            foreach ($erro as $campo => $mensagem) {
                echo '<p class="erro">' . $mensagem . '</p>';
            }
        }
    } else {
        echo '<p>Dados não enviados</p>';
    }
?>
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
        <input type="submit" name="submit" id="submit-button" value="Enviar">
        <input type="reset" value="Apagar">
    </div>
</form>