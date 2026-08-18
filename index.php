<?php include 'includes/header.php'; ?>

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

<!-- Seção de Solicitação de Orçamento -->
<section class="quote-section" style="padding: 60px 0; background-color: rgba(0,0,0,0.02);">
    <div class="container" style="max-width: 700px;">
        <div class="section-header" style="text-align: center; margin-bottom: 30px;" data-aos="fade-up">
            <span class="badge-tag">Atendimento Rápido</span>
            <h2 style="font-family: var(--font-serif); font-size: 2rem;">Solicite um Orçamento</h2>
        </div>

        <form action="processa-orcamento.php" method="POST" class="quote-form" data-aos="fade-up" data-aos-delay="100">
            <div class="form-group" style="margin-bottom: 15px;">
                <input type="text" name="nome" placeholder="Seu Nome Completo" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
            </div>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
                <input type="email" name="email" placeholder="Seu E-mail" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
                <input type="tel" name="telefone" placeholder="Telefone / WhatsApp" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <select name="servico" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="">Selecione o Serviço Desejado</option>
                    <option value="Georreferenciamento INCRA">Georreferenciamento INCRA</option>
                    <option value="Levantamento Planialtimétrico">Levantamento Planialtimétrico</option>
                    <option value="Demarcação e Retificação de Divisas">Demarcação e Retificação de Divisas</option>
                    <option value="Outros Serviços Topográficos/Agronômicos">Outros Serviços</option>
                </select>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <textarea name="mensagem" rows="4" placeholder="Descreva a localização, tamanho da área (hectares) ou detalhes do serviço..." required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>
            </div>

            <button type="submit" class="btn-primary" style="width: 100%; cursor: pointer; text-transform: uppercase;">Enviar Mensagem</button>
        </form>
    </div>
</section>

<!-- Seção de Depoimentos -->
<section class="testimonials-section" style="padding: 60px 0;">
    <div class="container">
        <div class="section-header" style="text-align: center; margin-bottom: 40px;" data-aos="fade-up">
            <span class="badge-tag">Avaliações</span>
            <h2 style="font-family: var(--font-serif); font-size: 2rem;">O Que Dizem Nossos Clientes</h2>
        </div>

        <!-- Grid de Cards de Depoimentos -->
        <div class="cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); margin-bottom: 50px;">
            <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-num">FAZENDA SANTA MARIA</div>
                <p style="font-style: italic; margin-bottom: 15px;">"A equipe da Landmensure realizou o georreferenciamento da nossa propriedade com extrema rapidez e precisão. Excelente atendimento e rigor técnico!"</p>
                <h4 style="font-weight: 600; color: var(--accent-copper);">- João Carlos, Produtor Rural</h4>
            </div>

            <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-num">AGRONEGÓCIO SILVA</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Serviço de altísima qualidade na demarcação de divisas. A tecnologia RTK e os mapas gerados ajudaram muito no nosso planejamento."</p>
                <h4 style="font-weight: 600; color: var(--accent-copper);">- Mariana Oliveira, Engenheira Agrônoma</h4>
            </div>
        </div>

        <!-- Formulário para Envio de Novos Depoimentos -->
        <div class="testimonial-form-container" style="max-width: 600px; margin: 0 auto;" data-aos="fade-up" data-aos-delay="300">
            <h3 style="margin-bottom: 20px; font-family: var(--font-serif); text-align: center;">Deixe seu Depoimento</h3>
            
            <form action="send-testimonial.php" method="POST" class="testimonial-form">
                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="text" name="nome" placeholder="Seu Nome ou Nome da Propriedade" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="text" name="cargo" placeholder="Seu Cargo ou Cidade (Ex: Produtor Rural - Brejo Santo/CE)" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
                </div>
                <div class="form-group" style="margin-bottom: 15px;">
                    <textarea name="mensagem" rows="4" placeholder="Escreva aqui sua experiência com nossos serviços..." required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>
                </div>
                <button type="submit" class="btn-primary" style="width: 100%; cursor: pointer;">Enviar Depoimento</button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>