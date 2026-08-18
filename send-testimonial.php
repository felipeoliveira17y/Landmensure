<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $cargo = trim($_POST['cargo'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');

    if (!empty($nome) && !empty($mensagem)) {
        $novoDepoimento = [
            'nome' => htmlspecialchars($nome),
            'cargo' => htmlspecialchars($cargo),
            'mensagem' => htmlspecialchars($mensagem),
            'data' => date('d/m/Y')
        ];

        $arquivo = 'depoimentos.json';
        $depoimentos = [];

        // Carrega os depoimentos existentes se o arquivo já existir
        if (file_exists($arquivo)) {
            $conteudo = file_get_contents($arquivo);
            $depoimentos = json_decode($conteudo, true) ?? [];
        }

        // Adiciona o novo depoimento no topo da lista
        array_unshift($depoimentos, $novoDepoimento);

        // Salva de volta no arquivo JSON
        file_put_contents($arquivo, json_encode($depoimentos, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    }
}

// Redireciona de volta para a página inicial
header('Location: index.php');
exit;
?>