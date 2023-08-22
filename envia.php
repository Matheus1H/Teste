<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);
    $idioma = addslashes($_POST["idioma"]);
    $nivel = addslashes($_POST["nivel"]);

    $para = "theusbrthack@gmail.com";
    $assunto = "Coleta de Dados";

    $corpo = "Nome: " . $nome . "\n" .
             "Email: " . $email . "\n" .
             "Idioma: " . $idioma . "\n" .
             "Nível: " . $nivel . "\n";

    $cabecalho = "From: matheusbino13@gmail.com" . "\r\n" .
                 "Reply-To: " . $email . "\r\n" .
                 "X-Mailer: PHP/" . phpversion();

    if (mail($para, $assunto, $corpo, $cabecalho)) {
        echo("Formulário enviado com sucesso");
    } else {
        echo("Houve um erro no envio do formulário");
    }
}
?>