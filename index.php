<?php 
$pageTitle = "Landmensure - Topografia & Agronomia";
include 'includes/header.php'; 
?>

<main>
    <section class="hero-section">
        <div class="container hero-grid">
            <div class="hero-text">
                <span class="badge-tag" data-aos="fade-up" data-aos-delay="100">Mapeamento & Georreferenciamento</span>
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="200">Precisão Técnica para os Limites da Sua Terra</h1>
                <p class="hero-desc" data-aos="fade-up" data-aos-delay="300">
                    Serviços de topografia de precisão para produtores rurais, fazendeiros e empresas do agronegócio. Certificação INCRA, regularização e demarcação de divisas.
                </p>
                <a href="about.php" class="btn-primary" data-aos="fade-up" data-aos-delay="400">Conheça Nossa Operação</a>
            </div>
            
            <div class="map-container" data-aos="fade-up" data-aos-delay="300">
                <canvas id="contourCanvas" class="contour-canvas"></canvas>
                <div class="canvas-overlay-data">
                    <span id="geoStatus">CARREGANDO DADOS RTK...</span>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Especialidades de Campo</h2>
            </div>
            <div class="cards-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-num">01 // INCRA</div>
                    <h3>Georreferenciamento de Imóveis Rurais</h3>
                    <p>Levantamento conforme norma técnica do INCRA para certificação no SIGEF, garantindo segurança jurídica total da propriedade.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-num">02 // ALTITUDES</div>
                    <h3>Levantamento Planialtimétrico</h3>
                    <p>Mapeamento detalhado de relevo e curvas de nível para projetos de irrigação, terraceamento e drenagem agrícola.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-num">03 // MARCOS</div>
                    <h3>Demarcação e Retificação</h3>
                    <p>Locação precisa de vértices e reavivamento de divisas de confrontação para solução de litígios ou loteamentos rurais.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Localização com Animação AOS -->
    <section class="map-location-section" style="padding: 60px 0; border-top: 1px solid var(--border-contour); border-bottom: 1px solid var(--border-contour); background-color: var(--bg-paper-dark);">
        <div class="container">
            
            <div class="section-header" data-aos="fade-up" style="text-align: center; margin-bottom: 30px;">
                <span class="badge-tag">Localização</span>
                <h2 style="font-family: var(--font-serif); font-size: 2rem;">Onde Estamos</h2>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-top: 8px;">
                    Rua Maria Novais Miranda, 77 – Bairro Sol Nascente, Porteiras - CE, 63270-000
                </p>
            </div>

            <div class="map-container" data-aos="fade-up" data-aos-delay="200">
                <div style="width: 100%; height: 420px; border-radius: 2px; overflow: hidden; border: 1px solid var(--border-contour);">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.411654158498!2d-39.11258!3d-7.533887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a1110754357a65%3A0x93b0dbcf4b6cdae3!2sR.%20Maria%20Novais%20Miranda%2C%2077%20-%20Sol%20Nascente%2C%20Porteiras%20-%20CE%2C%2063270-000!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" 
                        width="100%" 
                        height="100%" 
                        style="border:0; filter: sepia(20%) contrast(105%);" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </section>

    <!-- Seção de Solicitação de Orçamento -->
    <section class="quote-section" style="padding: 60px 0;">
        <div class="container" style="max-width: 700px;">
            <div class="section-header" style="text-align: center; margin-bottom: 30px;" data-aos="fade-up">
                <span class="badge-tag">Atendimento Rápido</span>
                <h2 style="font-family: var(--font-serif); font-size: 2rem;">Solicite um Orçamento</h2>
            </div>

            <form action="processa-orcamento.php" method="POST" class="quote-form testimonial-form-container" data-aos="fade-up" data-aos-delay="100" style="padding: 35px;">
                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="text" name="nome" placeholder="Seu Nome Completo" required class="custom-input">
                </div>
                
                <div class="form-row" style="margin-bottom: 15px;">
                    <input type="email" name="email" placeholder="Seu E-mail" required class="custom-input">
                    <input type="tel" name="telefone" placeholder="Telefone / WhatsApp" required class="custom-input">
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <select name="servico" required class="custom-input">
                        <option value="">Selecione o Serviço Desejado</option>
                        <option value="Georreferenciamento INCRA">Georreferenciamento INCRA</option>
                        <option value="Levantamento Planialtimétrico">Levantamento Planialtimétrico</option>
                        <option value="Demarcação e Retificação de Divisas">Demarcação e Retificação de Divisas</option>
                        <option value="Outros Serviços Topográficos/Agronômicos">Outros Serviços</option>
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <textarea name="mensagem" rows="4" placeholder="Descreva a localização, tamanho da área (hectares) ou detalhes do serviço..." required class="custom-input custom-textarea"></textarea>
                </div>

                <button type="submit" class="btn-primary btn-block" style="cursor: pointer;">Enviar Mensagem</button>
            </form>
        </div>
    </section>

    <!-- Seção de Depoimentos Única -->
    <section class="testimonials-section" style="padding: 60px 0; background-color: var(--bg-paper-dark);">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 40px;" data-aos="fade-up">
                <span class="badge-tag">Avaliações</span>
                <h2 style="font-family: var(--font-serif); font-size: 2rem;">O Que Dizem Nossos Clientes</h2>
            </div>

            <!-- Grid de Cards de Depoimentos Dinâmicos -->
            <div class="cards-grid" style="margin-bottom: 50px;">
                <?php
                $listaDepoimentos = [];

                if (file_exists('depoimentos.json')) {
                    $jsonSalvos = json_decode(file_get_contents('depoimentos.json'), true);
                    if (!empty($jsonSalvos)) {
                        foreach ($jsonSalvos as $dep) {
                            $listaDepoimentos[] = [
                                'nome' => strtoupper($dep['nome']),
                                'cargo' => !empty($dep['cargo']) ? '- ' . $dep['cargo'] : '',
                                'mensagem' => '"' . $dep['mensagem'] . '"'
                            ];
                        }
                    }
                }

                if (empty($listaDepoimentos)) {
                    echo '<p style="text-align: center; color: var(--text-muted); grid-column: 1 / -1;">Nenhum depoimento cadastrado no momento.</p>';
                } else {
                    $delay = 100;
                    foreach ($listaDepoimentos as $dep) {
                        echo '
                        <div class="feature-card" data-aos="fade-up" data-aos-delay="' . $delay . '">
                            <div class="card-num">' . htmlspecialchars($dep['nome']) . '</div>
                            <p style="font-style: italic; margin-bottom: 15px; color: var(--text-muted);">' . htmlspecialchars($dep['mensagem']) . '</p>
                            <h4 style="font-weight: 600; color: var(--accent-copper); font-family: var(--font-serif);">' . htmlspecialchars($dep['cargo']) . '</h4>
                        </div>';
                        $delay += 100;
                    }
                }
                ?>
            </div>

            <!-- Formulário para Envio de Novos Depoimentos -->
            <div class="testimonial-form-container" style="max-width: 600px; margin: 0 auto; padding: 35px;" data-aos="fade-up" data-aos-delay="300">
                <h3 style="margin-bottom: 20px; font-family: var(--font-serif); text-align: center;">Deixe seu Depoimento</h3>
                
                <form action="send-testimonial.php" method="POST" class="testimonial-form">
                    <div class="form-group" style="margin-bottom: 15px;">
                        <input type="text" name="nome" placeholder="Seu Nome ou Nome da Propriedade" required class="custom-input">
                    </div>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <input type="text" name="cargo" placeholder="Seu Cargo ou Cidade (Ex: Produtor Rural - Brejo Santo/CE)" class="custom-input">
                    </div>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <textarea name="mensagem" rows="4" placeholder="Escreva aqui sua experiência com nossos serviços..." required class="custom-input custom-textarea"></textarea>
                    </div>
                    <button type="submit" class="btn-primary btn-block" style="cursor: pointer;">Enviar Depoimento</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>