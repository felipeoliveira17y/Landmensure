<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landmensure - Serviços Topográficos e Agronômicos</title>
    
    <!-- Fontes Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,300;0,400;0,700;1,400&family=Cinzel:wght@500;700&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS da biblioteca AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- CSS Principal (Com cache bust atualizado) -->
    <link rel="stylesheet" href="css/style.css?v=2.1">
    <link rel="icon" type="image/png" href="img/favicon.png?v=1">
</head>
<body>
    <header class="site-header">
        <div class="container header-content">
            <a href="index.php" class="brand-logo">
                <div class="logo-mark">
                    <svg viewBox="0 0 40 40" width="36" height="36" fill="none" stroke="currentColor">
                        <circle cx="20" cy="20" r="18" stroke-width="1.5" opacity="0.3"/>
                        <circle cx="20" cy="20" r="12" stroke-width="1.5" opacity="0.6"/>
                        <circle cx="20" cy="20" r="6" stroke-width="1.5"/>
                        <line x1="20" y1="0" x2="20" y2="40" stroke-width="1" opacity="0.4" stroke-dasharray="2 2"/>
                        <line x1="0" y1="20" x2="40" y2="20" stroke-width="1" opacity="0.4" stroke-dasharray="2 2"/>
                    </svg>
                </div>
                <div class="brand-text">
                    <span class="brand-title">LANDMENSURE</span>
                    <span class="brand-subtitle">TOPOGRAFIA & AGRONOMIA</span>
                </div>
            </a>
            
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Início</a></li>
                    <li><a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">Sobre a Empresa</a></li>
                    <li><a href="depoimentos.php" class="<?= basename($_SERVER['PHP_SELF']) == 'depoimentos.php' ? 'active' : '' ?>">Depoimentos</a></li>
                    <li><a href="contato.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contato.php' ? 'active' : '' ?>">Contato</a></li>
                </ul>
            </nav>

            <div class="header-coords">
                <span class="coord-label">LOC:</span>
                <span class="coord-value">7°10'50.7"S 38°46'48.5"W</span>
            </div>
        </div>
    </header>
    <main>