<?php
$arquivo = 'depoimentos.json';
$mensagemAlerta = '';

// Lógica para excluir o depoimento pelo índice
if (isset($_GET['acao']) && $_GET['acao'] === 'excluir' && isset($_GET['id'])) {
    $idParaExcluir = (int)$_GET['id'];
    
    if (file_exists($arquivo)) {
        $depoimentos = json_decode(file_get_contents($arquivo), true) ?? [];
        
        if (isset($depoimentos[$idParaExcluir])) {
            unset($depoimentos[$idParaExcluir]);
            $depoimentos = array_values($depoimentos); // Reindexa o array
            
            file_put_contents($arquivo, json_encode($depoimentos, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
            $mensagemAlerta = "Depoimento removido com sucesso do portal.";
        }
    }
}

// Carrega os depoimentos atuais
$depoimentos = [];
if (file_exists($arquivo)) {
    $depoimentos = json_decode(file_get_contents($arquivo), true) ?? [];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel da Equipe - Landmensure Topografia</title>
    <!-- Importação das mesmas fontes do site -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-paper: #f9f6f0;
            --bg-paper-dark: #f0ebe1;
            --text-main: #2b2b2b;
            --text-muted: #6b6b6b;
            --accent-copper: #b87333;
            --border-contour: #d4c5b9;
        }

        body {
            background-color: var(--bg-paper);
            font-family: 'Inter', sans-serif;
            color: var(--text-main);
            margin: 0;
            padding: 40px 20px;
        }

        .admin-wrapper {
            max-width: 900px;
            margin: 0 auto;
        }

        .admin-header-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid var(--accent-copper);
            padding-bottom: 15px;
            margin-bottom: 30px;
        }

        h1 {
            font-family: 'Cinzel', serif;
            font-size: 1.6rem;
            color: var(--text-main);
            margin: 0;
        }

        .badge-internal {
            background-color: var(--accent-copper);
            color: white;
            padding: 4px 10px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 2px;
        }

        .alert {
            background-color: #e2f0d9;
            color: #274e13;
            padding: 12px 18px;
            border-radius: 2px;
            margin-bottom: 25px;
            border: 1px solid #b7d7a8;
            font-size: 0.9rem;
        }

        .table-card {
            background: #fff;
            border: 1px solid var(--border-contour);
            border-radius: 2px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid var(--border-contour);
            font-size: 0.92rem;
        }

        th {
            background-color: var(--bg-paper-dark);
            font-weight: 600;
            color: var(--accent-copper);
            font-family: 'Cinzel', serif;
            font-size: 0.9rem;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .btn-delete {
            background-color: #a94442;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 2px;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.8rem;
            transition: background 0.2s;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-delete:hover {
            background-color: #843534;
        }

        .btn-voltar {
            display: inline-block;
            margin-top: 25px;
            color: var(--accent-copper);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .btn-voltar:hover {
            text-decoration: underline;
        }

        .empty-msg {
            color: var(--text-muted);
            font-style: italic;
            text-align: center;
            padding: 40px;
            background: #fff;
            border: 1px solid var(--border-contour);
        }
    </style>
</head>
<body>

    <div class="admin-wrapper">
        <div class="admin-header-box">
            <h1>Painel de Moderação &mdash; Landmensure</h1>
            <span class="badge-internal">Área Restrita</span>
        </div>

        <?php if (!empty($mensagemAlerta)): ?>
            <div class="alert"><?php echo $mensagemAlerta; ?></div>
        <?php endif; ?>

        <?php if (empty($depoimentos)): ?>
            <div class="empty-msg">
                Nenhum depoimento pendente ou cadastrado no sistema no momento.
            </div>
        <?php else: ?>
            <div class="table-card">
                <table>
                    <thead>
                        <tr>
                            <th>Cliente / Propriedade</th>
                            <th>Cargo / Cidade</th>
                            <th>Depoimento Registrado</th>
                            <th style="text-align: center;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($depoimentos as $index => $dep): ?>
                            <tr>
                                <td><strong><?php echo htmlspecialchars($dep['nome']); ?></strong></td>
                                <td style="color: var(--text-muted);"><?php echo htmlspecialchars($dep['cargo']); ?></td>
                                <td><em><?php echo htmlspecialchars($dep['mensagem']); ?></em></td>
                                <td style="text-align: center;">
                                    <a href="admin.php?acao=excluir&id=<?php echo $index; ?>" class="btn-delete" onclick="return confirm('Tem certeza que deseja remover este depoimento do site público?');">Remover</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>

        <a href="index.php" class="btn-voltar">&larr; Retornar à Página Principal</a>
    </div>

</body>
</html>