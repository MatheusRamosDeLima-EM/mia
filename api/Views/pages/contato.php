<?php 
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $email = $_POST['email'];
        $text = $_POST['text'];

        if (empty($nome)) {
            $erro['nome'] = 'O nome é obrigatório.';
        }
    
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erro['email'] = 'O e-mail é inválido.';
        }
    
        if (empty($mensagem)) {
            $erro['mensagem'] = 'A mensagem é obrigatória.';
        }

        if (empty($erro)) {
            // Enviar email de forma mais simples:
            $destinatario = 'mia.lojadedoces@gmail.com';
            $assunto = "$nome entrou em contato!";
            $mensagem_html = '
                <h1>Mensagem de contato:</h1>
                <p><strong>Nome</strong>: ' . $nome . '</p>
                <p><strong>E-mail</strong>: ' . $email . '</p>
                <p><strong>Mensagem</strong>: ' . $mensagem . '</p>
            ';
            // Envia o e-mail
            mail($destinatario, $assunto, $mensagem_html);


            // Enviar email de forma completa:

            // $mail = new PHPMailer();
            // $mail->From = $email;
            // $mail->FromName = $nome;
            // $mail->AddAddress('contato@example.com');
            // $mail->Subject = 'Mensagem de contato';
            // $mail->Body = '
            //     <h1>Mensagem de contato</h1>
            //     <p>Nome: <strong>' . $nome . '</strong></p>
            //     <p>E-mail: <strong>' . $email . '</strong></p>
            //     <p>Mensagem: <strong>' . $mensagem . '</strong></p>
            // ';
            // if (!$mail->Send()) {
            //     echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
            // } else {
            //     echo 'E-mail enviado com sucesso!';
            // }

            if (!empty($erro)) {
                foreach ($erro as $campo => $mensagem) {
                    echo '<p class="erro">' . $mensagem . '</p>';
                }
            } else {
                echo '<p>E-mail enviado com sucesso</p>';
            }
        }
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