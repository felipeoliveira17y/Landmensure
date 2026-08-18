<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Recebe e limpa os dados do formulário
    $nome     = filter_var($_POST['nome'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email    = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $telefone = filter_var($_POST['telefone'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $servico  = filter_var($_POST['servico'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mensagem = filter_var($_POST['mensagem'] ?? '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // 2. Configurações do E-mail
    $para        = "landmensure@gmail.com";
    $assunto     = "Novo Orçamento do Site - " . $nome;
    
    $corpoEmail  = "Você recebeu uma nova solicitação de orçamento pelo site:\n\n";
    $corpoEmail .= "----------------------------------------\n";
    $corpoEmail .= "Nome: " . $nome . "\n";
    $corpoEmail .= "E-mail: " . $email . "\n";
    $corpoEmail .= "Telefone/WhatsApp: " . $telefone . "\n";
    $corpoEmail .= "Serviço Desejado: " . $servico . "\n";
    $corpoEmail .= "----------------------------------------\n\n";
    $corpoEmail .= "Detalhes/Mensagem:\n" . $mensagem . "\n";

    $headers  = "From: no-reply@" . $_SERVER['HTTP_HOST'] . "\r\n";
    if ($email) {
        $headers .= "Reply-To: " . $email . "\r\n";
    }
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envia o e-mail em segundo plano
    @mail($para, $assunto, $corpoEmail, $headers);

    // 3. Monta o link do WhatsApp
    $numeroWhatsapp = "5588981197489";
    
    $textoZap  = "*NOVO ORÇAMENTO PELO SITE*\n\n";
    $textoZap .= "*Nome:* " . $nome . "\n";
    $textoZap .= "*E-mail:* " . $email . "\n";
    $textoZap .= "*Telefone:* " . $telefone . "\n";
    $textoZap .= "*Serviço:* " . $servico . "\n\n";
    $textoZap .= "*Detalhes:* " . $mensagem;

    $urlWhatsapp = "https://wa.me/" . $numeroWhatsapp . "?text=" . urlencode($textoZap);

    // Redireciona o usuário para o WhatsApp
    header("Location: " . $urlWhatsapp);
    exit();
} else {
    header("Location: index.php");
    exit();
}