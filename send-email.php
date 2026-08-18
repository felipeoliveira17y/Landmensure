<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclusão manual dos arquivos da biblioteca no caminho correto da sua estrutura
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitização e validação dos dados do formulário
    $nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
    $servico  = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!$nome || !$email || !$telefone || !$mensagem) {
        header('Location: contato.php?status=erro-dados');
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configurações do Servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'landmensure@gmail.com';        // Seu e-mail de envio
        $mail->Password   = 'SUA_SENHA_DE_APLICATIVO';      // Insira a senha de aplicativo de 16 dígitos do Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Configurações de Codificação e Remetente
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('landmensure@gmail.com', 'Site Landmensure');
        $mail->addAddress('landmensure@gmail.com', 'Landmensure Topografia');
        $mail->addReplyTo($email, $nome);

        // Conteúdo do E-mail
        $mail->isHTML(true);
        $mail->Subject = "Novo Orçamento: " . ($servico ? $servico : 'Geral') . " - {$nome}";

        $mail->Body = "
            <div style='font-family: Arial, sans-serif; color: #2b2823; max-width: 600px; margin: 0 auto; border: 1px solid #d2c8b4; padding: 20px; background-color: #f3efe6;'>
                <h2 style='color: #a65828; border-bottom: 2px solid #a65828; padding-bottom: 8px;'>Novo Pedido de Orçamento</h2>
                
                <p><strong>Nome:</strong> {$nome}</p>
                <p><strong>E-mail:</strong> {$email}</p>
                <p><strong>Telefone / WhatsApp:</strong> {$telefone}</p>
                <p><strong>Serviço Desejado:</strong> " . ($servico ? $servico : 'Não informado') . "</p>
                
                <div style='margin-top: 20px; padding: 15px; background-color: #ffffff; border-left: 4px solid #395741;'>
                    <h3 style='margin-top: 0; color: #395741;'>Mensagem / Detalhes:</h3>
                    <p style='white-space: pre-wrap;'>" . nl2br($mensagem) . "</p>
                </div>
            </div>
        ";

        $mail->AltBody = "Novo Pedido de Orçamento:\n\nNome: {$nome}\nE-mail: {$email}\nTelefone: {$telefone}\nServiço: {$servico}\nMensagem:\n{$mensagem}";

        $mail->send();
        header('Location: contato.php?status=sucesso');
        exit;

    } catch (Exception $e) {
        header('Location: contato.php?status=erro');
        exit;
    }
} else {
    header('Location: contato.php');
    exit;
}